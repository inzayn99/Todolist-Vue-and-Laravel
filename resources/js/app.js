
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('todo', require('./components/todo.vue').default);


const app = new Vue({
    el: '#app',
});
