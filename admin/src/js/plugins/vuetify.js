import Vue from 'vue';
import Vuetify from 'vuetify/lib'; // import Vuetify from 'vuetify'

Vue.use(Vuetify);

const opts = {
	theme: {
		options: {
			customProperties: true,
		},
		themes: {
			light: {
				primaryMain: '#145DCC', // #E53935
				// secondary: colors.red.lighten4, // #FFCDD2
				// accent: colors.indigo.base, // #3F51B5
				redMain: '#CE0737',
				darkenMain: '#3A3A3A'
			}
		}
	}
}

export default new Vuetify(opts);
