import Vue from 'vue'
import App from './App.vue'
import router from './js/router/router'
import store from './js/store/store'
import routerConfig from './js/router/config';
routerConfig();


// - - - - - PLUGINS - - - - - //
import vuetify from "./js/plugins/vuetify"
import ModalConfirm from './js/components/modal/ModalConfirm'
import Snackbar from "./js/components/global/Snackbar"
import LoaderOverlay from "./js/components/global/LoaderOverlay"
import dateFilter from "./js/filters/date"
import { VueEditor } from "vue2-editor";


// - - - - - GLOBAL COMPONENT - - - - - //
Vue.component('ModalConfirm', ModalConfirm)
Vue.component('Snackbar', Snackbar)
Vue.component('LoaderOverlay', LoaderOverlay)
Vue.component('VueEditor', VueEditor);


// - - - - - DIRECTIVES - - - - - //


// - - - - - MIXINS - - - - - //


// - - - - - USE - - - - - //


// - - - - - FILTERS - - - - - //
Vue.filter('dateFilter', dateFilter)


// - - - - - STYLES - - - - - //
import './scss/admin.scss'


Vue.config.productionTip = false

new Vue({
  router,
  store,
  vuetify,
  render: h => h(App)
}).$mount('#app')
