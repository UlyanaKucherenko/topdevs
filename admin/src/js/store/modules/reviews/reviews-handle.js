import api from '@/js/api/index'

export default {
	namespaced: true,
	state: {
		slug: null,
		editedItem: null
	},
	getters: {
		formTitle(s) {
			return !s.slug ? 'Create review' : 'Edit review'
		},
	},
	mutations: {
		SET_SLUG: (s, slug) => s.slug = slug,
		SET_ITEM: (s, item) => {
			s.editedItem = {
				slug: item.id,
				customer_name: item.customer_name,
				customer_position: item.customer_position,
				text: item.text,
				country: item.country,
				link: item.link
			}
		},
		RESET_ITEM: s => {
			s.slug = null
			s.editedItem = null
		}
	},
	actions: {
		async getItem({state, commit}) {
			const res = await api.reviews.getItem(state.slug)
			commit('SET_ITEM', res.data.data)
			console.log('=> Res', res.data.data)
		},

		updateItem({state}, data) {
			return api.reviews.updateItem(state.slug, data)
		},

		createItem({}, data) {
			return api.reviews.createItem(data)
		}
	}
}
