import Vue from 'vue';
import store from '@/js/store/index'

// - - - - - PLUGINS - - - - - //

import VueWindowSize from 'vue-window-size';
import Vuelidate from 'vuelidate'
import VueFlags from "@growthbunker/vueflags"
import vClickOutside from 'v-click-outside'
import ScrollReveal from '@/js/directives/scroll-reveal'
import VModal from 'vue-js-modal'
import Sticky from 'vue-sticky-directive'
import VueAwesomeSwiper from 'vue-awesome-swiper'
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';

// - - - - - DIRECTIVES - - - - - //

import 'swiper/swiper-bundle.css'
import {cursorFollow} from '@/js/directives/cursor-follow'
import {slidingChars} from '@/js/directives/sliding-chars'
import splitChars from '@/js/directives/split-chars'
import {numericOnly} from '@/js/directives/numeric-only'

// - - - - - MIXINS - - - - - //

import scrollTo from '@/js/mixins/scroll-to'
import {handlePropsBreakpoints} from '@/js/mixins/scroll-to'

// - - - - - FILTERS - - - - - //

import formatDate from '@/js/filters/format-date'

// - - - - - - - - - - - - - - //

Vue.use(VueAwesomeSwiper, /* { default options with global component } */)
Vue.filter('formatDate', formatDate)
Vue.mixin(scrollTo)
Vue.mixin(handlePropsBreakpoints)
Vue.use(VModal)
Vue.use(Sticky)
Vue.use(ScrollReveal, {
  class: 'v-scroll-reveal',
  duration: 800,
  scale: 1,
  distance: '100px',
  mobile: false,
  cleanup: true,
  viewOffset: {
    top: 70,
    bottom: 70
  },
});

Vue.use(vClickOutside)
Vue.use(VueFlags)
Vue.use(Vuelidate)
Vue.use(VueWindowSize, {
  delay: 10,
})
Vue.use(VueToast);

Vue.directive('cursor-follow', cursorFollow)
Vue.directive('sliding-chars', slidingChars)
Vue.directive('split-chars', splitChars)
Vue.directive('numeric-only', numericOnly)

Vue.component('Home', require('./pages/Index.vue').default);
Vue.component('Thank', require('./pages/Thank.vue').default);
Vue.component('Privacy', require('./pages/policy/Privacy').default);
Vue.component('Cookies', require('./pages/policy/Cookies').default);
Vue.component('ContactUs', require('./pages/ContactUs').default);
Vue.component('Resume', require('./pages/Resume').default);
Vue.component('AboutUs', require('./pages/AboutUs').default);
Vue.component('Error404', require('./pages/errors/Error404').default);

Vue.component('TheHeader', require('./components/global/TheHeader.vue').default);
Vue.component('TheFooter', require('./components/global/TheFooter.vue').default);
Vue.component('DefaultLayout', require('./layouts/DefaultLayout.vue').default);
Vue.component('IndustriesLayout', require('./layouts/IndustriesLayout.vue').default);
Vue.component('PortfolioLayout', require('./layouts/PortfolioLayout.vue').default);

Vue.component('Services', require('./pages/services/Index.vue').default)
Vue.component('Outsourcing', require('./pages/services/Outsourcing.vue').default)
Vue.component('FullCycle', require('./pages/services/FullCycle.vue').default)
Vue.component('WebDev', require('./pages/services/WebDev.vue').default)
Vue.component('Mobile', require('./pages/services/Mobile.vue').default)
Vue.component('Design', require('./pages/services/Design.vue').default)
Vue.component('Outstaffing', require('./pages/services/Outstaffing.vue').default)
Vue.component('Mvp', require('./pages/services/Mvp.vue').default)
Vue.component("AroundTheClock", require('./pages/portfolio/AroundTheClock.vue').default)

Vue.component('Industries', require('./pages/industries/Index.vue').default)
Vue.component('Media', require('./pages/industries/Media.vue').default)
Vue.component('Sports', require('./pages/industries/Sports.vue').default)
Vue.component('Logic', require('./pages/industries/Logic.vue').default)
Vue.component('Healthcare', require('./pages/industries/Healthcare.vue').default)
Vue.component('Retail', require('./pages/industries/Retail.vue').default)
Vue.component('Education', require('./pages/industries/Education.vue').default)
Vue.component('Estate', require('./pages/industries/Estate.vue').default)
Vue.component('Dating', require('./pages/industries/Dating.vue').default)

Vue.component('Portfolio', require('./pages/portfolio/Index.vue').default)
Vue.component('Solocator', require('./pages/portfolio/Solocator.vue').default)
Vue.component('Beauty', require('./pages/portfolio/Beauty.vue').default)
Vue.component('Qliq', require('./pages/portfolio/Qliq.vue').default)
Vue.component('Real', require('./pages/portfolio/Real.vue').default)
Vue.component('Calibre', require('./pages/portfolio/Calibre.vue').default)
Vue.component('Meld', require('./pages/portfolio/Meld.vue').default)
Vue.component('Pet', require('./pages/portfolio/Pet.vue').default)
Vue.component('Gera', require('./pages/portfolio/Gera.vue').default)
Vue.component('Gog', require('./pages/portfolio/Gog.vue').default)
Vue.component('Artv', require('./pages/portfolio/Artv.vue').default)
Vue.component('Deal', require('./pages/portfolio/Deal.vue').default)
Vue.component('Bark', require('./pages/portfolio/Bark.vue').default)
Vue.component('Helpy', require('./pages/portfolio/Helpy.vue').default)
Vue.component('Event', require('./pages/portfolio/Event.vue').default)
Vue.component('Dancebug', require('./pages/portfolio/Dancebug.vue').default)
Vue.component('Quick', require('./pages/portfolio/Quick.vue').default)
Vue.component('Easy', require('./pages/portfolio/Easy.vue').default)
Vue.component('Golf', require('./pages/portfolio/Golf.vue').default)

Vue.component('Blog', require('./pages/blog/Index').default);
Vue.component('Post', require('./pages/blog/Post').default)

const app = new Vue({
    el: '#app',
    store,
});
