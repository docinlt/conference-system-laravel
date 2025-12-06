require('./bootstrap');

import axios from 'axios';
import 'admin-lte';
import 'bootstrap';
import $ from 'jquery';
window.$ = $;

console.log('App loaded');

axios.get('/').then(response => {
    console.log('Home page loaded');
});
