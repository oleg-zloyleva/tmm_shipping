
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';

require('./calculate');
require('./order');
require('./main');
require('./admin');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./usspi_form');

console.log("app was loaded....");
// Vue.component('example', require('./components/Example.vue'));
Vue.component('rate-calc-component', require('./components/RateCalculatorComponent/RateCalculatorComponent').default);

const app = new Vue({
    el: '#app'
});
