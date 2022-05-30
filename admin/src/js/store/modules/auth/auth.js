import api from '@/js/api'

export default {
	namespaced: true,
	state: {
		token: localStorage.getItem('token') || null,
		tokenRefreshed: false
	},
	mutations: {
		RESET_TOKEN: s => {
			s.token = null
			s.tokenRefreshed = true
			localStorage.removeItem('token')
		},
		SET_TOKEN: (s, token) => {
			s.token = token
			s.tokenRefreshed = true
			localStorage.setItem('token', token)
		},
	},
	actions: {
		async refreshToken({ commit }) {
			api.auth.refresh()
				.then(res => {
					commit('SET_TOKEN', res.data.access_token)
				})
		}
	}
}
