require('./bootstrap');
import router from "./routes";
import VueRouter from "vue-router";

window.Vue = require('vue');

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('example-component-2', require('./components/Example2.vue').default);

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router
});
