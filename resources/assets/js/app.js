require('./bootstrap');

angular.module('app', [

  // 3rd party apps
  'ui.bootstrap',
  'ngMaterial',

  // App modules
  'app.home',
  'app.admin'

], function($interpolateProvider) {
      $interpolateProvider.startSymbol('<%');
      $interpolateProvider.endSymbol('%>');
});

// App modules
require('./modules/home/home.config');
require('./modules/admin/admin.config');

angular.bootstrap(document, ['app']);
