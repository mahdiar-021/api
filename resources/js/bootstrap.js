import Vue from 'vue';
import Axios from 'axios';
import VueRouter from 'vue-router'


window.Vue = Vue;
Vue.use(VueRouter)

window.axios = Axios;

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};
