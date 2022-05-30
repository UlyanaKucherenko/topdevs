import Vue from 'vue';

Vue.component('Conf', require('./pages/Conf.vue').default);
Vue.component('ConfThank', require('./pages/ConfThank.vue').default);

const appConf = new Vue({
  el: '#app-conf'
})
