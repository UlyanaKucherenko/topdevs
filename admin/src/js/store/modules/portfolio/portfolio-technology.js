import api from '@/js/api/index'
import router from "@/js/router/router";

export default {
	namespaced: true,
	state: {
		list: null,
		pagination: null,
		editedIndex: -1,
		editedItem: {
			name: ''
		},
		defaultItem: {
			name: ''
		}
	},
	getters: {
		formTitle(s) {
			return s.editedIndex === -1 ? 'New technology' : 'Edit technology'
		},
		formattedList(s) {
			return s.list?.map(el => {
				return {
					name: el.name,
					slug: el.slug,
					created: el.created_at
				}
			})
		}
	},
	mutations: {
		SET_LIST: (s, res) => {
			let {data, ...pagination} = res;
			s.list = data;
			s.pagination = pagination;

			let currentPage = +pagination.current_page;
			if (currentPage !== 1) {
				router.push(`${router.currentRoute.path}?page=${currentPage}`).catch(()=>{})
			} else {
				router.push(router.currentRoute.path).catch(()=>{})
			}
		},
		SET_INDEX: (s, item) => s.editedIndex = s.list.findIndex(el => el.name === item.name),
		SET_ITEM: (s, item) => s.editedItem = item,
		RESET_ITEM: s => {
			s.editedItem = s.defaultItem
			s.editedIndex = -1
		},
	},
	actions: {
		async getList({commit}, page) {
			const res = await api.portfolioTechnology.getList(page)
			console.log('portfolioTechnology', res.data)
			commit('SET_LIST', res.data.data)
		},

		createItem({}, data) {
			return api.portfolioTechnology.createItem(data)
		},

		updateItem({state}, data) {
			return api.portfolioTechnology.updateItem({
				slug: state.editedItem.slug,
				data: data
			})
		},

		deleteItem({}, slug) {
			return api.portfolioTechnology.deleteItem(slug)
		}
	}
}
