
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import 'bootstrap/dist/css/bootstrap.css';

import { library } from '@fortawesome/fontawesome-svg-core';
import { faTrashAlt, faPlus } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
library.add(faTrashAlt,faPlus);
Vue.component('font-awesome-icon', FontAwesomeIcon);

// require('./calculate');
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
Vue.component('ocean-delivery-component', require('./components/OceanDeliveryPriceList/OceanDeliveryPriceListComponent').default);
Vue.component('ocean-delivery-form-component', require('./components/OceanDeliveryPriceList/OceanDeliveryPortsFormComponent').default);
Vue.component('admin-menu-component', require('./components/AdminLayoutComponent/AdminMenuComponent').default);

Vue.component('ground-delivery-component', require('./components/GroundDeliveryPriceList/GroundDeliveryPriceListComponent').default);
Vue.component('ground-delivery-form-component', require('./components/GroundDeliveryPriceList/AddGroundDeliveryItemFormComponent').default);

Vue.component('order-page', require('./components/OrderPageComponent/OrderPageComponent').default);
Vue.component('services-page', require('./components/ServicesPageComponent/ServicesPageComponent').default);

const app = new Vue({
    el: '#app'
});
