import api from '@/js/api/index'
import router from "@/js/router/router"

export default {
	namespaced: true,
	state: {
		list: null,
		pagination: null
	},
	getters: {
		formattedList: (s) => {
			return s.list?.map(item => {
				return {
					slug: item.id,
					customer_name: item.customer_name,
					customer_position: item.customer_position,
					text: item.text,
					country: item.country,
					link: item.link,
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
		}
	},
	actions: {
		async getList({commit}, page) {
			// state.list = null
			const res = await api.reviews.getList(page);
			console.log('Res reviews', res.data.data)
			commit('SET_DATA', res.data.data)
		},

		deleteItem({}, slug) {
			return api.reviews.deleteItem(slug)
		}
	}
}
