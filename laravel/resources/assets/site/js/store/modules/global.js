import api from '@/js/api';

const state = () => ({
  deviceIsMobile: false,
  headerAnimationIsDisabled: false,
  allCountries: [],
  userCountry: null,
})

const getters = {
}

const actions = {
  async fetchCountries({commit}) {
    let countries
    const countriesFromStorage = localStorage.getItem('countries')
    if (countriesFromStorage) countries = JSON.parse(countriesFromStorage)
    else {
      const res = await api.global.getCountries()
      countries = res.data
      localStorage.setItem('countries', JSON.stringify(countries))
    }
    commit('SET_COUNTRIES', countries)
  },
}

const mutations = {
  SET_STATE(state, payload) {
    Object.keys(payload).forEach(key => {
      let value = payload[key]
      state[key] = value
    })
  },
  SET_COUNTRIES(state, payload) {
    state.allCountries = payload.all_countries;
    state.userCountry = payload.user_country
    console.log('SET_COUNTRIES')
  }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
