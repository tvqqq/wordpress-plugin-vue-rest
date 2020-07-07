import Vue from 'vue'
import {BootstrapVue, BootstrapVueIcons} from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import VueRouter from 'vue-router'

Vue.config.productionTip = false
Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)
Vue.use(VueRouter)

window.axios = require('axios');
axios.defaults.baseURL = WpvrJs.data.base_url;
axios.defaults.headers.common['X-WP-Nonce'] = WpvrJs.nonce;

// Plugin components
import App from './App.vue'
import Home from "./components/Home.vue";

const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        }
    ]
});

// Create a global mixin to expose strings, global config, and single backend resource.
Vue.mixin({
    methods: {
        makeToast(msg, variant = 'success') {
            this.$bvToast.toast(msg, {
                title: 'Notification',
                autoHideDelay: 3000,
                appendToast: true,
                variant: variant,
                solid: true,
                toaster: 'b-toaster-bottom-right'
            })
        }
    }
});

// Main Vue instance that bootstraps the frontend.
new Vue({
    el: '#wpvr-app',
    data: WpvrJs.data,
    router,
    render: h => h(App)
});

