const state = () => ({
  pageIsLoaded: false,
  headerAnimIsEnded: false,
  imagesToLoadCount: 0,
  imagesLoadedCount: 0,
  fastLoading: true
})

const getters = {
  progressValue(state) {
    return Math.floor(state.imagesToLoadCount/state.imagesLoadedCount) * 100
  },
}

const actions = {}

const mutations = {
  SET_STATE(state, payload) {
    Object.keys(payload).forEach(key => {
      let value = payload[key]
      state[key] = value
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
