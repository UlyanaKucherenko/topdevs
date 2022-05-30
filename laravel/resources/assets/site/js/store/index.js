import Vue from 'vue'
import Vuex from 'vuex'
import loading from './modules/loading'
import global from './modules/global'
import blog from './modules/blog'
import portfolio from './modules/portfolio'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    global,
    loading,
    blog,
    portfolio
  },
})