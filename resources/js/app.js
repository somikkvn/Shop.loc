require('./bootstrap');
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar-component', require('./components/navbar/NavbarComponent.vue').default);

const app = new Vue({
    el: '#app',
});
