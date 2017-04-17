require('./bootstrap');

angular.module('app', [

  // 3rd party apps
  'ngMaterial',

  // App modules
  'app.home'

]);

// App modules
require('./modules/home/home.config');

angular.bootstrap(document, ['app']);
