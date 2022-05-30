import api from '@/js/api/index.js';
import {deepCopy} from '@/js/mixins/functions'

const state = () => ({
  mobileFilterColumnIsVisible: false,
  filteredCases: [],
  pagination: {},
  prevRubrics: [],
  nextRubrics: [],
})

const getters = {
  formattedFilteredCases(state) {
    return state.filteredCases.map(item => ({
      id: item.id,
      title: item.title,
      subtitle: item.sub_title,
      desc: item.description,
      link: item.link,
      case_industry: item.case_industry,
      imgURL: '/storage/' + item.picture.path,
      color: item.background_color,
    }))
  },

  urlParams(state) {
    let rubricsParams = ''
    let paginationParams = ''

    let rubrics = state.prevRubrics
    rubrics.forEach(rubric => {
      let activeFilters = rubric.filters.filter(filter => filter.checked == true)
      if (activeFilters.length) rubricsParams += `${rubric.slug}=${activeFilters.map(filter => filter.slug).join(',')}&`
    })
    rubricsParams = rubricsParams.slice(0,-1)

    if (state.pagination.currentPage != 1) paginationParams = `page=${state.pagination.currentPage}`

    let params = [rubricsParams, paginationParams].filter(param => param)
    params.forEach((_, index) => {
      if (params[index + 1]) params[index] += '&'
    })

    return params.join('')
  }
}

const actions = {
  async getCases({ getters, state, commit }) {
    let response = await api.portfolio.getList(`${getters.urlParams}`)
    response = response.data.portfolio
    commit('SET_STATE', {
      filteredCases: response.data,
      pagination: {
        currentPage: response.current_page,
        lastPage: response.last_page,
        perPage: response.per_page
      },
    })
    
    let urlParams = getters.urlParams ? `${window.location.pathname}?${getters.urlParams}` : window.location.pathname
    history.pushState(null, null, urlParams);
  },

  async submitFilters({ state, dispatch, commit }) {
    commit('SET_STATE', {
      prevRubrics: state.nextRubrics,
      nextRubrics: deepCopy(state.nextRubrics),
      prevTags: state.nextTags,
      nextTags: deepCopy(state.nextTags),
      pagination: {...state.pagination, currentPage: 1}
    })
  }
}

const mutations = {
  PARSE_URL(state) {
    if (!window.location.search) return
    let params = {}
    window.location.search.slice(1).split('&').map(el => el.split('=')).forEach(el => params[el[0]] = el[1].split(','))
    let {page, ...rubrics} = params

    if (page?.length) state.pagination.currentPage = page

    Object.entries(rubrics).forEach(entry => {
      let [rubricSlug, filtersSlugs] = entry
      let prevFilters = state.prevRubrics.find(rubric => rubric.slug == rubricSlug)?.filters
      let nextFilters = state.nextRubrics.find(rubric => rubric.slug == rubricSlug)?.filters
      if (prevFilters) {
        filtersSlugs.forEach(slug => {
          nextFilters.find(filter => filter.slug == slug).checked = true
          prevFilters.find(filter => filter.slug == slug).checked = true
        })
      }
    })
  },

  SET_RUBRICS(state, rubrics) {
    rubrics = rubrics.map(rubric => ({
      ...rubric,
      filters: rubric.filters.map(filter => ({
        ...filter, 
        checked: false
      }))
    }))

    state.prevRubrics = deepCopy(rubrics)
    state.nextRubrics = deepCopy(rubrics)
  },

  SET_RUBRIC_FILTER(state, payload) {
    let rubrics = state.nextRubrics
    let rubric = rubrics.find(rubric => rubric.slug == payload.rubricSlug)
    let filter = rubric.filters.find(filter => filter.slug == payload.filterSlug)
    filter.checked = payload.value
  },

  SET_STATE(state, payload) {
    Object.keys(payload).forEach(key => {
      state[key] = payload[key]
    })
  }
}

export default {  
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}