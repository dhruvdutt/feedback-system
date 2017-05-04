window.angular = require('angular');
window.$ = require('jquery');
require('angular-aria');
require('angular-animate');
require('angular-material');
require('angular-material-accordion');
require('angular-material-data-table');
require('angular-cookies');

window.axios = require('axios');
window.axios.defaults.baseURL = 'http://a0f30725.ngrok.io/api/';
window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};


// Material initialisation
$(document).ready(function(){
  $('.modal').modal();
  $('select').material_select();
  $('.datepicker').pickadate({
   selectMonths: true
 });
 $('.collapsible').collapsible();
});
