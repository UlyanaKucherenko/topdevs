import fetchData from '@/js/api/fetchData'
import routes from '@/js/api/api-routes'

export default {
	getList() {
		return fetchData.get(`${routes.tags}`)
	},
	createItem(data) {
		return fetchData.post(routes.tags, data)
	},
	updateItem({slug, data}) {
		return fetchData.post(`${routes.tags}/${slug}`, data)
	},
	deleteItem(slug) {
		return fetchData.delete(`${routes.tags}/${slug}`)
	}
}
