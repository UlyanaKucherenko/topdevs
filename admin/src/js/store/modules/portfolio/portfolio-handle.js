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
			return !s.slug ? 'Create project' : 'Edit project'
		},
		servicesListSelected: s => {
			return s.editedItem?.services
		},
		industriesListSelected: s => {
			return s.editedItem?.industries
		},
		technologyListSelected: s => {
			return s.editedItem?.technologies
		}
	},
	mutations: {
		SET_SLUG: (s, slug) => s.slug = slug,
		SET_ITEM: (s, item) => {
			s.editedItem = {
				title: item.title,
				slug: item.slug,
				sub_title: item.sub_title,
				link: item.link,
				picture: item.picture ? new File([], item.picture.name) : null,
				pictureDemo: item.picture ? s.imgPath + item.picture.path : '/admin/images/photo-download-default.png',
				background_color: item.background_color,
				picture_meta_alt: item.picture.picture_meta_alt,
				picture_meta_title: item.picture.picture_meta_title,
				description: item.description,
				services: item.services,
				industries: item.industries,
				technologies: item.technologies,
				case_industry: item.case_industry,
				location: item.location
			}
		},
		RESET_ITEM: s => {
			s.slug = null
			s.editedItem = null
		}
	},
	actions: {
		async getItem({state, commit}) {
			const res = await api.portfolio.getItem(state.slug)
			commit('SET_ITEM', res.data.portfolio)
			console.log('=> Res', res.data.portfolio)
		},

		updateItem({state}, data) {
			return api.portfolio.updateItem({
				slug: state.slug,
				data: data
			})
		},

		createItem({}, data) {
			return api.portfolio.createItem(data)
		}
	}
}
