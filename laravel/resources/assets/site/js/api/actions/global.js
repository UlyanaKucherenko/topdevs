import routes from '../apiRoutes'
import axios from 'axios'

export default {
  async getCountries() {
    return axios.get(routes.countries)
  }
}
