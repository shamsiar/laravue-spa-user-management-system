/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import SignupComponent from './components/SignupComponent';
import App from './App.vue';
Vue.use(VueRouter);
const axios = require('axios').default;
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('modal-component', require('./App.vue').default);
Vue.component('test-component', require('./components/TestComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({
    routes:[
        {path:'/login',component: LoginComponent},
        {path:'/signup',component: SignupComponent},
    ],
    mode: 'history',
});

const app = new Vue({
    router,
    render: h => h(App),
    el: '#app',
});
const test = new Vue({
    el: '#test',
});
