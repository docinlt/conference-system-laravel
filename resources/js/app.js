require('./bootstrap');

import axios from 'axios';

console.log('App loaded');

axios.get('/').then(response => {
    console.log('Home page loaded');
});
