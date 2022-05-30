import api from '@/js/api/index'
import router from "@/js/router/router";

export default {
	namespaced: true,
	state: {
		tags: null,
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
			return s.tags?.map(item => {
				return {
					id: item.id,
					slug: item.slug,
					name: item.name,
				}
			})
		},
		formTitle(s) {
			return s.editedIndex === -1 ? 'New tag' : 'Edit tag'
		}
	},
	mutations: {
		SET_TAGS: (s, tags) => {
			s.tags = tags;
		},
		SET_INDEX: (s, item) => {
			s.editedIndex = s.tags.findIndex(el => el.name === item.name)
		},
		SET_ITEM: (s, item) => s.editedItem = item,
		RESET_ITEM: s => {
			s.editedItem = s.defaultItem
			s.editedIndex = -1
		}
	},
	actions: {
		async getList({commit}, page) {
			const res = await api.postsTags.getList(page)
			commit('SET_TAGS', res.data)
		},

		createItem({}, data) {
			return api.postsTags.createItem(data)
		},

		updateItem({state}, data) {
			return api.postsTags.updateItem({
				slug: state.editedItem.slug,
				data: data
			})
		},

		deleteItem({}, slug) {
			return api.postsTags.deleteItem(slug)
		},
	}
}
