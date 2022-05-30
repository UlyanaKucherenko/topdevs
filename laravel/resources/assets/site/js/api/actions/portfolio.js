import routes from '@/js/api/apiRoutes'
import axios from 'axios'

export default {
  getList(params) {
    params = params ? `?${params}` : ''
    return axios.get(routes.portfolio.list + params)
  },

  getAll() {
    return axios.get(routes.portfolio.all)
  }
} 
