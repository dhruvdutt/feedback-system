angular
.module('app.home')
.controller('HomeController', controller);

controller.$inject = [];

// //////////////////////////////
function controller() {

  let vm = this;

  vm.shouldFormBeDisabled = shouldFormBeDisabled;

  // //////////////////////////////
  function shouldFormBeDisabled() {
    return vm.tokenForm.$invalid;
  }
}
