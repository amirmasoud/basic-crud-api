require('./bootstrap');

import Vue from 'vue';
import BasicNavbar from './components/Navbar';
import BasicMain from './components/Main';

Vue.component('basic-navbar', BasicNavbar);
Vue.component('basic-main', BasicMain);

var app = new Vue({
    el: '#app',
})
