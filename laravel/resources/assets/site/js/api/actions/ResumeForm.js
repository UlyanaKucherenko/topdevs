import routes from '../apiRoutes'
import axios from 'axios'

export default {
  submit(payload) {
    return axios.post(routes.resumeForm, payload, {
      'Content-Type': 'multipart/form-data'
    })
  }
}
