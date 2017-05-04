require('./bootstrap');

angular.module('app', [

  // 3rd party apps
  'ngMaterial',
  'ngCookies',

  // App modules
  'app.home',
  'app.courseSelection',
  'app.admin',
  'angAccordion',
  'md.data.table'

], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

// App modules
require('./modules/home/home.config');
require('./modules/course-selection/course-selection.config');
require('./modules/admin/admin.config');

angular.bootstrap(document, ['app']);
