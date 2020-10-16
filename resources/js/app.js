require('./bootstrap');
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar-component', require('./components/navbar/NavbarComponent.vue').default);
Vue.component('massonry-component', require('./components/masonry/MassonryComponent.vue').default);
Vue.component('masonry', require('./components/masonry/Masonry.vue').default);
Vue.component('masonry-shop', require('./components/masonry/MasonryShop.vue').default);
Vue.component('masonry-img', require('./components/masonry/MasonryImg.vue').default);
Vue.component('categories', require('./components/Categories').default);

const app = new Vue({
    el: '#app',
});

import Vue from 'vue'
import VueMasonry from 'vue-masonry-css'

Vue.use(VueMasonry);
