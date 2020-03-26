import './bootstrap';

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

// Tar vekk denne "-"
Vue.filter('remove-', function(value){
    return value.split("-").pop();
});

Vue.filter('firstLetterUpper', function(value){
    return value.charAt(0).toUpperCase() + value.substring(1);
});

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
