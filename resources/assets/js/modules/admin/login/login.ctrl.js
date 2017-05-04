angular
  .module('app.admin.auth')
  .controller('LoginController', controller);

controller.$inect = ['LoginService'];

function controller(LoginService) {

  var vm = this;

  vm.login = login;

  _setDefaults();

  function login() {
    LoginService.login(vm.user).then(function() {
      window.location.href = '/admin/settings/feedback';
    }).catch(function(error) {
      console.log(error);
    });
  }

  function _setDefaults() {
    vm.user = {};
  }
}
