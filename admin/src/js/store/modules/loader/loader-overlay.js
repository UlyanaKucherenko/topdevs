export default {
	namespaced: true,
	state: {
		// show: false,
		timeout: 20000,
		absolute: true,
		overlay: true,
	},
	mutations: {
		OPEN_LOADER: (s, data) => {
			// Object.keys(data).forEach(key => {
			// 	s[key] = data[key];
			// })
			s.overlay = true
		},
		CLOSE_LOADER: s => s.overlay = false
	}
}
