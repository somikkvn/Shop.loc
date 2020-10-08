require('./bootstrap');
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar-component', require('./components/navbar/NavbarComponent.vue').default);
Vue.component('massonry-component', require('./components/MassonryComponent.vue').default);

const app = new Vue({
    el: '#app',
});

import Vue from 'vue'
import VueMasonry from 'vue-masonry-css'

Vue.use(VueMasonry);
