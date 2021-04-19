import Vue from "vue";

import VueRouter from "vue-router";
Vue.use(VueRouter);

// const Home = require('./pages/Home.vue').default
// const About = require('./pages/About.vue').default
// const NotFound = require('./pages/NotFound.vue').default
import Home from "../pages/Home.vue";
import About from "../pages/About.vue";
import NotFound from "../pages/NotFound.vue";

const routes = [
    {
        path: "/home",
        component: Home
    },
    {
        path: "/about",
        component: About
    },
    {
        path: "*",
        component: NotFound
    }
];

const router = new VueRouter({
    mode: "history",
    routes
});

export default router;
