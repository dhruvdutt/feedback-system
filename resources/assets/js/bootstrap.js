window.angular = require('angular');
require('angular-aria');
require('angular-animate');
require('angular-material');
require('angular-material-sidemenu');
require('angular-material-data-table');

window.axios = require('axios');
window.axios.defaults.baseURL = '/api/';

// window.axios.defaults.headers.common = {
//     'X-CSRF-TOKEN': window.Laravel.csrfToken,
//     'X-Requested-With': 'XMLHttpRequest'
// };
