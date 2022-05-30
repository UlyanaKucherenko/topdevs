export default {
	namespaced: true,
	state: {
		show: false,
		title: 'Are you sure?',
		text: 'Do you really want to delete this record?',
		action: null
	},
	mutations: {
		MODAL_HANDLER: (s, payload) => s.show = payload,
		MODAL_ACTION: s => s.action = true,
		MODAL_SET_DATA: (s, payload) => {
			if (payload) {
				Object.keys(payload).forEach(key => {
					s[key] = payload[key];
				})
			}
		},
		MODAL_RESET: s => {
			s.title = 'Are you sure?';
			s.text = 'Do you really want to delete this record?';
			s.action = null;
		}
	},
	getters: {},
	actions: {},
}
