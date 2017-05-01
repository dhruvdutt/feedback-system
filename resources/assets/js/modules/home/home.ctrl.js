angular
.module('app.home')
.controller('HomeController', controller);

controller.$inject = [];

// //////////////////////////////
function controller() {

  var vm = this;

  vm.shouldFormBeDisabled = shouldFormBeDisabled;
  vm.postToken = postToken;

  // //////////////////////////////

  function shouldFormBeDisabled() {
    return vm.tokenForm.$invalid;
  }

  function postToken() {
    HomeService.postToken(vm.token).catch(error => {
      console.log(error);
    });
  }
}
