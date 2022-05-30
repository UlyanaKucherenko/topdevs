import api from '@/js/api/index'
import router from "@/js/router/router"

export default {
	namespaced: true,
	state: {
		list: null,
		pagination: null,
		showedItem: {}
	},
	getters: {
		formattedList: (s) => {
			return s.list?.map(item => {
				return {
					id: item.id,
					name: item.name,
					email: item.email,
					phone: item.phone,
					skype: item.skype,
					message: item.message,
					checked: item.get_NDA,
					created: item.created_at
				}
			})
		}
	},
	mutations: {
		SET_DATA: (s, res) => {
			s.list = res.data;
			let {data, ...pagination} = res;
			s.pagination = pagination;

			let currentPage = +pagination.current_page;
			if (currentPage !== 1) {
				router.push(`${router.currentRoute.path}?page=${currentPage}`).catch(()=>{})
			} else {
				router.push(router.currentRoute.path).catch(()=>{})
			}
		},
		SET_SHOWED_ITEM: (s, item) => s.showedItem = item,
		RESET_ITEM: s => s.showedItem = {}
	},
	actions: {
		async getList({commit}, page) {
			// state.list = null
			const res = await api.letters.getList(page);
			commit('SET_DATA', res.data.data)
		},

		deleteItem({}, id) {
			return api.letters.deleteItem(id)
		}
	}
}
