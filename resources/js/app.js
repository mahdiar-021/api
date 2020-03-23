require('./bootstrap');
import router from './router';
import Header from './components/admin/Header.vue';
import Sidebar from './components/admin/Sidebar.vue';

Vue.component('MyHeader',Header);
Vue.component('SideBar',Sidebar)

const app = new Vue({
    el: '#app',
    router,
});
