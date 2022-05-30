import fetchData from '@/js/api/fetchData'
import routes from '@/js/api/api-routes'

export default {
  getList(payload) {
		if (typeof payload === 'string' && payload === 'all') return fetchData.get(`${routes.portfolio}?per_page=all`)
		else return fetchData.get(`${routes.portfolio}?page=${+payload}`) 
	},
	createItem(data) {
		return fetchData.post(routes.portfolio, data)
	},
	getItem(slug) {
		return fetchData.get(`${routes.portfolio}/${slug}`)
	},
	updateItem({slug, data}) {
		return fetchData.post(`${routes.portfolio}/${slug}`, data)
	},
	deleteItem(slug) {
		return fetchData.delete(`${routes.portfolio}/${slug}`)
	},
	updateOrder(payload) {
		return fetchData.post(routes.portfolioOrder, {order: payload})
	},
}
