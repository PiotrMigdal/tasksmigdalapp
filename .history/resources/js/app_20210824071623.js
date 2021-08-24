require('./bootstrap');

import VueRouter from 'vue-router';
import router from './routes';
import Index from './index';
import Vue from 'vue';

window.Vue = require('vue').default;
Vue.use(VueRouter);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    router,
    components: {
      "index": Index,
    }
});