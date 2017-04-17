angular
.module('app.home')
.controller('HomeController', controller);

controller.$inject = [];

// //////////////////////////////
function controller() {

  var vm = this;

  vm.shouldFormBeDisabled = shouldFormBeDisabled;

  // //////////////////////////////
  function shouldFormBeDisabled() {
    return vm.tokenForm.$invalid;
  }
}
