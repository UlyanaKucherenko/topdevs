import api from '@/js/api/index'
import router from "@/js/router/router"

export default {
	namespaced: true,
	state: {
		list: null,
		statuses: null,
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
					title: item.title,
					is_show_to_main_page: item.is_show_to_main_page,
					status: item.status,
					created: item.created_at
				}
			})
		}
	},
	mutations: {
		SET_DATA: (s, res) => {
			let {data, ...pagination} = res.data;
			s.list = data;
			s.pagination = pagination;
			s.statuses = res.status

			let currentPage = +pagination.current_page;
			if (currentPage !== 1) {
				router.push(`${router.currentRoute.path}?page=${currentPage}`).catch(()=>{})
			} else {
				router.push(router.currentRoute.path).catch(()=>{})
			}
		}
	},
	actions: {
		async getList({commit, state}, page) {
			// state.list = null
			const res = await api.posts.getList(page)
			commit('SET_DATA', res.data)
		},

		deleteItem({}, slug) {
			return api.posts.deleteItem(slug)
		}
	}
}
