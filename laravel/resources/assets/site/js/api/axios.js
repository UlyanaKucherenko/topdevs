import axios from 'axios'

let baseURL = 'window.origin'

export default axios.create({
  baseURL
})