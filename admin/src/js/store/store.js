import Vue from 'vue'
import Vuex from 'vuex'

import auth from "./modules/auth/auth"
import modalConfirm from './modules/modal/modal-confirm'
import snackbar from './modules/snackbar/snackbar'

import postsList from './modules/posts/posts-list'
import postsHandle from './modules/posts/posts-handle'
import postsFilter from './modules/posts/posts-filter'
import postsCategories from './modules/posts/posts-categories'
import postsTags from './modules/posts/posts-tags'

import portfolioList from './modules/portfolio/portfolio-list'
import portfolioHandle from './modules/portfolio/portfolio-handle'
import portfolioFilter from './modules/portfolio/portfolio-filter'
import portfolioTechnology from './modules/portfolio/portfolio-technology'

import reviewsList from './modules/reviews/reviews-list'
import reviewsHandle from './modules/reviews/reviews-handle'

import lettersList from './modules/letters/letters-list'

Vue.use(Vuex)

export default new Vuex.Store({
	modules: {
		auth,
		modalConfirm,
		snackbar,

		postsList,
		postsHandle,
		postsFilter,
		postsCategories,
		postsTags,

		portfolioList,
		portfolioHandle,
		portfolioFilter,
		portfolioTechnology,

		reviewsList,
		reviewsHandle,

		lettersList,
	}
})
