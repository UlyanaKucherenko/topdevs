import api from '@/js/api/index'
import {deepCopy} from '@/js/mixins/functions'

const state = () => ({
  mobileFilterColumnIsVisible: false,
  latestPosts: [],
  filteredPosts: [],
  pagination: {
    currentPage: 1,
    perPage: 4,
    lastPage: 1
  },
  prevTags: [],
  nextTags: [],
  prevRubrics: [],
  nextRubrics: [],
  initFetchIsDone: false
})

const getters = {
  formattedLatestPosts(state) {
    return state.latestPosts.map(post => {
      let rubrics = []
      if (post.categories?.length) rubrics = rubrics.concat(post.categories.map(el => el.name))
      if (post.industries?.length) rubrics = rubrics.concat(post.industries.map(el => el.name))

      return {
        title: post.title,
        rubrics,
        slug: post.slug,
        imgURL: post.picture.image
      }
    })
  },

  formattedFilteredPosts(state) {
    return state.filteredPosts.map(post => {
      let rubrics = []
      if (post.categories?.length) rubrics = rubrics.concat(post.categories.map(el => el.name))
      if (post.industries?.length) rubrics = rubrics.concat(post.industries.map(el => el.name))
      return {
        id: post.id,
        title: post.title,
        imgURL: post.picture.image,
        date: post.created_at,
        slug: post.slug,
        rubrics,
      }
    })
  },

  urlParams(state) {
    let rubricsParams = ''
    let tagsParams = ''
    let paginationParams = ''

    let rubrics = state.prevRubrics
    rubrics.forEach(rubric => {
      let activeFilters = rubric.filters.filter(filter => filter.checked == true)
      if (activeFilters.length) rubricsParams += `${rubric.slug}=${activeFilters.map(filter => filter.slug).join(',')}&`
    })
    rubricsParams = rubricsParams.slice(0,-1)

    let tags = state.prevTags.filter(tag => tag.checked)
    if (tags.length) tagsParams = `tags=${state.prevTags.filter(tag => tag.checked).map(tag => tag.slug).join(',')}`

    if (state.pagination.currentPage != 1) paginationParams = `page=${state.pagination.currentPage}`

    let params = [rubricsParams, tagsParams, paginationParams].filter(param => param)
    params.forEach((_, index) => {
      if (params[index + 1]) params[index] += '&'
    })

    return params.join('')
  }
}

const actions = {
  async getPosts({ getters, state, commit }) {
    let response = await api.posts.getList(`${getters.urlParams}`)
    response = response.data
    commit('SET_STATE', {
      filteredPosts: response.data,
      pagination: {
        currentPage: response.meta.current_page,
        lastPage: response.meta.last_page,
        perPage: response.meta.per_page
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
    let {tags, page, ...rubrics} = params

    if (tags?.length) tags.forEach(slug => {
      state.prevTags.find(tag => tag.slug == slug).checked = true
      state.nextTags.find(tag => tag.slug == slug).checked = true
    })

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

  SET_TAGS(state, tags) {
    tags = tags.map(tag => ({
      ...tag,
      checked: false
    }))

    state.prevTags = deepCopy(tags)
    state.nextTags = deepCopy(tags)
  },

  SET_TAG(state, payload) {
    state.nextTags.find(tag => tag.slug == payload.slug).checked = payload.value
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
  },
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
