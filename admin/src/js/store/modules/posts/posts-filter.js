import api from '@/js/api/index'

export default {
	namespaced: true,
	state: {
		list: null
	},
	getters: {
		categoriesList: s => {
			let list = s.list?.find(item => item.name === 'Categories')
			return list?.filters
		},
		industriesList: s => {
			let list = s.list?.find(item => item.name === 'Industries')
			return list?.filters
		},
		tagsList: s => {
			let list = s.list?.find(item => item.name === 'Tags')
			return list?.filters
		},
		statusesList: s => {
			let list = s.list?.find(item => item.name === 'Statuses')
			return list?.filters
		}
	},
	mutations: {
		SET_LIST: (s, data) => {
			s.list = data
			console.log('Posts filter:', data)
		}
	},
	actions: {
		async getList({commit}, page) {
			const res = await api.postsFilter.getList(page)
			commit('SET_LIST', res.data)
		}
	}
}
