import router from './router';

export default () => {
	// router.beforeEach((to, from, next) => {
		// if (to.name === 'login') {
			// next();
		// } else {
			// const token = localStorage.getItem('token');
			// const dateNow = Math.floor(Date.now() / 1000);
// 
			// if (token) {
				// console.log('TOKEN IS LIVE:', parseJwt(token).exp > dateNow)
				// if (parseJwt(token).exp < dateNow) {
					// logout(next)
				// } else {
					// next()
				// }
			// } else {
				// logout(next)
			// }
		// }
	// });
}

function logout(next) {
	localStorage.removeItem('token');
	localStorage.removeItem('user_info');
	next(false);
	router.push({name: 'login'});
}

function parseJwt(token) {
	let base64Url = token.split('.')[1];
	let base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
	let jsonPayload = decodeURIComponent(atob(base64).split('').map(function (c) {
		return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
	}).join(''));

	return JSON.parse(jsonPayload);
}
