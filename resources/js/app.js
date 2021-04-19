
require('./bootstrap');

window.Vue = require('vue').default;

import Vue from "vue";
import VueRouter from "vue-router"
Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', require('./components/Header.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);


const Home = require('./pages/Home.vue').default
const About = require('./pages/About.vue').default
const NotFound = require('./pages/NotFound.vue').default

const routes = [
    {
        path: '/home',
        component: Home
    },
    {
        path: '/about',
        component: About
    },
    {
        path: '*',
        component: NotFound
    }
]

const router = new VueRouter({
    mode: 'history',
    routes
})

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        title: 'Laravel Vue'
    },
    router,
});
