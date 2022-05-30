import api from '@/js/api/index'

export default {
	namespaced: true,
	state: {
		slug: null,
		editedItem: null,
		imgPath: `${location.protocol}//${location.hostname}/storage/`,

	},
	getters: {
		formTitle(s) {
			return !s.slug ? 'Create post' : 'Edit post'
		},
		categoriesListSelected: s => {
			return s.editedItem?.categories
		},
		industriesListSelected: s => {
			return s.editedItem?.industries
		},
		tagsListSelected: s => {
			return s.editedItem?.tags
		},
		showToMainPage() {
			return [
				{name: 'Show', show: 1},
				{name: 'Hide', show: 0}
			]
		}
	},
	mutations: {
		SET_SLUG: (s, slug) => s.slug = slug,
		SET_ITEM: (s, item) => {
			let dateDefault = new Date().toISOString().substr(0, 10) + ' ' + new Date().toTimeString().substr(0, 8)
			let pictureAlt
			s.editedItem = {
				title: item.title,
				slug: item.slug,
				meta_title: item.meta_title,
				meta_description: item.meta_description,
				keywords: item.keywords,
				short_description: item.short_description,
				status: item.status,
				read_time: item.read_time,
				publish_at: item.publish_at ? item.publish_at : dateDefault,
				is_show_to_main_page: item.is_show_to_main_page,
				picture: item.picture ? new File([], item.picture.name) : null,
				pictureDemo: item.picture ? s.imgPath + item.picture.path : '/admin/images/photo-download-default.png',
				picture_meta_alt: handleValue(item.picture.picture_meta_alt),
				picture_meta_title: handleValue(item.picture.picture_meta_title),
				description: item.description,
				categories: item.categories,
				industries: item.industries,
				tags: item.tags,
				banner_text: item.banner_text,
				is_active_banner: item.is_active_banner
			}

			function handleValue(val) {
				if (val === 'null' || val === 'undefined') return ''
				else return val
			}
		},
		RESET_ITEM: s => {
			s.slug = null
			s.editedItem = null
		}
	},
	actions: {
		async getItem({state, commit}) {
			const res = await api.posts.getItem(state.slug)
			commit('SET_ITEM', res.data.post)
		},

		updateItem({state}, data) {
			return api.posts.updateItem(state.slug, data)
		},

		createItem({}, data) {
			return api.posts.createItem(data)
		}
	}
}
