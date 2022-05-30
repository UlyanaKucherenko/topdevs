import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
	{
		path: '/',
		redirect: () => localStorage.getItem('token') ? '/main' : '/login'
	},
	{
		path: '/login',
		name: 'login',
		meta: {layout: 'auth'},
		component: () => import('../auth/Login')
	},

	// - - - Main - - - //
	{
		path: '/main',
		name: 'main',
		meta: {layout: 'main', active: 'main'},
		component: () => import('../pages/Main/Main')
	},

	{
		path: '/blog/posts',
		name: 'posts',
		meta: {layout: 'main', active: 'blog'},
		component: () => import('../pages/Blog/PostsList')
	},
	{
		path: '/blog/posts/create',
		name: 'posts-create',
		meta: {layout: 'main', active: 'blog'},
		component: () => import('../pages/Blog/PostsHandle')
	},
	{
		path: '/blog/posts/edit/:slug',
		name: 'posts-edit',
		meta: {layout: 'main', active: 'blog'},
		component: () => import('../pages/Blog/PostsHandle')
	},
	{
		path: '/blog/categories',
		name: 'posts-categories',
		meta: {layout: 'main', active: 'blog'},
		component: () => import('../pages/Blog/PostsCategories')
	},
	{
		path: '/blog/tags',
		name: 'posts-tags',
		meta: {layout: 'main', active: 'blog'},
		component: () => import('../pages/Blog/PostsTags')
	},
	{
		path: '/portfolio',
		name: 'portfolio',
		meta: {layout: 'main', active: 'portfolio'},
		component: () => import('../pages/Portfolio/PortfolioList')
	},
	{
		path: '/portfolio/create',
		name: 'portfolio-create',
		meta: {layout: 'main', active: 'portfolio'},
		component: () => import('../pages/Portfolio/PortfolioHandle')
	},
	{
		path: '/portfolio/edit/:slug',
		name: 'portfolio-edit',
		meta: {layout: 'main', active: 'portfolio'},
		component: () => import('../pages/Portfolio/PortfolioHandle')
	},
	{
		path: '/portfolio/filter',
		name: 'portfolio-filter',
		meta: {layout: 'main', active: 'portfolio'},
		component: () => import('../pages/Portfolio/PortfolioFilter')
	},

	{
		path: '/reviews',
		name: 'reviews',
		meta: {layout: 'main', active: 'reviews'},
		component: () => import('../pages/Reviews/ReviewsList')
	},
	{
		path: '/reviews/create',
		name: 'reviews-create',
		meta: {layout: 'main', active: 'reviews'},
		component: () => import('../pages/Reviews/ReviewsHandle')
	},
	{
		path: '/reviews/edit/:slug',
		name: 'reviews-edit',
		meta: {layout: 'main', active: 'reviews'},
		component: () => import('../pages/Reviews/ReviewsHandle')
	},

	{
		path: '/letters',
		name: 'letters',
		meta: {layout: 'main', active: 'letters'},
		component: () => import('../pages/Letters/LettersList')
	},

]

const router = new VueRouter({
	// mode: 'history',
	base: '/admin/',
	routes
})

export default router
