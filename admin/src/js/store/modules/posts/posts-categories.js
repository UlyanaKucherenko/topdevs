import api from '@/js/api/index'
import router from "@/js/router/router";

export default {
	namespaced: true,
	state: {
		categories: null,
		pagination: null,
		editedIndex: -1,
		editedItem: {
			name: '',
		},
		defaultItem: {
			name: '',
		}
	},
	getters: {
		formattedList: (s) => {
			return s.categories?.map(item => {
				return {
					id: item.id,
					slug: item.slug,
					name: item.name,
					created: item.created_at
				}
			})
		},
		formTitle(s) {
			return s.editedIndex === -1 ? 'New category' : 'Edit category'
		}
	},
	mutations: {
		SET_CATEGORIES: (s, res) => {
			let {data, ...pagination} = res;
			s.categories = data;
			s.pagination = pagination;

			let currentPage = +pagination.current_page;
			if (currentPage !== 1) {
				router.push(`${router.currentRoute.path}?page=${currentPage}`).catch(()=>{})
			} else {
				router.push(router.currentRoute.path).catch(()=>{})
			}
		},
		SET_INDEX: (s, item) => {
			s.editedIndex = s.categories.findIndex(el => el.name === item.name)
		},
		SET_ITEM: (s, item) => s.editedItem = item,
		RESET_ITEM: s => {
			s.editedItem = s.defaultItem
			s.editedIndex = -1
		}
	},
	actions: {
		async getList({commit}, page) {
			const res = await api.postsCategories.getList(page)
			commit('SET_CATEGORIES', res.data.data)
		},

		createItem({}, data) {
			return api.postsCategories.createItem(data)
		},

		updateItem({state}, data) {
			return api.postsCategories.updateItem({
				slug: state.editedItem.slug,
				data: data
			})
		},

		deleteItem({}, slug) {
			return api.postsCategories.deleteItem(slug)
		},
	}
}
