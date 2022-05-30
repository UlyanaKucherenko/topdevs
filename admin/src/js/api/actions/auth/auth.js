import fetchData from '../../fetchData'
import routes from '@/js/api/api-routes'

export default {
	login(data) {
		return fetchData.post(routes.login, data)
	},
	logout() {
		return fetchData.post(routes.logout)
	},
	refresh() {
		return fetchData.post(routes.refresh)
	}
}
