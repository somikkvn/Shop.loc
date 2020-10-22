require('./bootstrap');
window.Vue = require('vue');

Vue.component('navbar-component', require('./components/navbar/NavbarComponent.vue').default);
Vue.component('massonry-component', require('./components/masonry/MassonryComponent.vue').default);
Vue.component('masonry-shop', require('./components/masonry/MasonryShop.vue').default);
Vue.component('masonry-img', require('./components/masonry/MasonryImg.vue').default);
Vue.component('cart', require('./components/cart/Cart.vue').default);

const app = new Vue({
    el: '#app',
});

import Vue from 'vue';
import VueMasonry from 'vue-masonry-css';
import VueSweetalert2 from 'vue-sweetalert2';

Vue.use(VueMasonry);
Vue.use(VueSweetalert2);
