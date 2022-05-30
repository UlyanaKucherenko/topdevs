import fetchData from '@/js/api/fetchData'
import routes from '@/js/api/api-routes'

export default {
  getList(page) {
    return fetchData.get(`${routes.portfolioFilters}?page=${page}`)
  }
}
