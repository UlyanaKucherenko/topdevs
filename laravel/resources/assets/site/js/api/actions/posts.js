import routes from '../apiRoutes'
import axios from 'axios'

export default ({
  getList(params) {
    if (params) params = `?${params}`
    return axios.get(routes.posts.index + params)
  },

  getRandomPosts() {
    return axios.get(routes.posts.random)
  },

  getLatestPosts() {
    return axios.get(routes.posts.latest)
  },

  getPostsByIndustry(industry) {
    return axios.get(routes.posts.byIndustry, {params: {industry}})
  }
})
