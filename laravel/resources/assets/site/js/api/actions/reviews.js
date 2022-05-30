import routes from '../apiRoutes'
import axios from 'axios'

export default {
  getList(params) {
    return axios.get(routes.reviews)
  }
}
