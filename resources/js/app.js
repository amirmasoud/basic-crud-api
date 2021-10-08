require('./bootstrap');

import Vue from 'vue';

import BasicNavbar from './components/Navbar';
import BasicCard from './components/Card';

import BasicSampleIndex from './components/samples/Index';
import BasicSampleCreate from './components/samples/Create';

Vue.component('basic-navbar', BasicNavbar);
Vue.component('basic-card', BasicCard);

Vue.component('basic-sample-index', BasicSampleIndex);
Vue.component('basic-sample-create', BasicSampleCreate);

new Vue({
    el: '#app',
});
