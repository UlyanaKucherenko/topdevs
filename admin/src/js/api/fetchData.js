import axios from 'axios'
import store from "@/js/store/store";
import router from '@/js/router/router';

const baseURL = `${location.protocol}//${location.hostname}/api/admin/`;
const headers = {
	Accept: 'application/json'
};

const baseInstance = axios.create({
	baseURL: baseURL,
	timeout: 10000,
	headers: headers
});

baseInstance.interceptors.request.use(config => {
	config.headers.Authorization = 'Bearer ' + localStorage.getItem('token');
	return config;
})

baseInstance.interceptors.response.use(response => response, err => {
	if (err?.response?.status === 401) {
		store.commit('auth/RESET_TOKEN')
		router.push({name: 'login'});
		return Promise.reject('Logout')
	}

	return Promise.reject(err)
})

export default baseInstance;
