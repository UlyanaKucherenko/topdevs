import api from '@/js/api/index'
import router from "@/js/router/router"

export default {
	namespaced: true,
	state: {
		list: null,
		pagination: null,
		imgPath: `${location.protocol}//${location.hostname}/storage/`
	},
	getters: {
		formattedList: (s) => {
			return s.list?.map(item => {
				return {
					id: item.id,
					slug: item.slug,
					picture: item.picture ? s.imgPath + item.picture.thumbnail : '/admin/images/photo-default.svg',
					project: item.title,
					created: item.created_at
				}
			})
		}
	},
	mutations: {
		CLEAR_LIST(s) {
			s.list = null
		},

		SET_DATA: (s, res) => {
			s.list = res.data.data;
			let {data, ...pagination} = res.data;
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
			const res = await api.portfolio.getList(page);
			commit('SET_DATA', res.data)
		},

		deleteItem({}, slug) {
			return api.portfolio.deleteItem(slug)
		}
	}
}
