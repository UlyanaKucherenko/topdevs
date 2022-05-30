export default {
	namespaced: true,
	state: {
		show: false,
		type: 'success',
		text: '',
		timeout: 1500
	},
	mutations: {
		OPEN_SNACKBAR: (s, data) => {
			Object.keys(data).forEach(key => {
				s[key] = data[key];
			})
			s.show = true
		},
		CLOSE_SNACKBAR: s => s.show = false
	}
}
