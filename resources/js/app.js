

require('./bootstrap');

window.Vue = require('vue');



Vue.component('app', require('./components/App.vue').default);

import Vue from 'vue'
import vSelectPage from 'v-selectpage';
Vue.use(vSelectPage, {
    language: 'en',
});


const app = new Vue({
    el: '#app',
});
