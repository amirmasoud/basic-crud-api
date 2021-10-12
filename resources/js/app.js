require('./bootstrap');

import Vue from 'vue';

import BasicNavbar from './components/Navbar';

import BasicSampleIndex from './components/samples/Index';
import BasicSampleCreate from './components/samples/Create';
import BasicSampleEdit from './components/samples/Edit';

Vue.component('basic-navbar', BasicNavbar);

Vue.component('basic-sample-index', BasicSampleIndex);
Vue.component('basic-sample-create', BasicSampleCreate);
Vue.component('basic-sample-edit', BasicSampleEdit);

new Vue({
    el: '#app',
});
