import api from '@/js/api/index'

export default {
	namespaced: true,
	state: {
		list: null
	},
	getters: {
		servicesList: s => {
			let list = s.list?.find(item => item.name === 'Services')
			return list?.filters
		},
		industriesList: s => {
			let list = s.list?.find(item => item.name === 'Industries')
			return list?.filters
		},
		technologyList: s => {
			let list = s.list?.find(item => item.name === 'Technology')
			return list?.filters
		}
	},
	mutations: {
		SET_LIST: (s, data) => {
			// let
			s.list = data
			console.log(data)
		}
	},
	actions: {
		async getList({commit}, page) {
			const res = await api.portfolioFilter.getList(page)
			commit('SET_LIST', res.data)
		}
	}
}
