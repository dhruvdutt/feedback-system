angular
.module('app.home')
.controller('HomeController', controller);

controller.$inject = ['HomeService'];

// //////////////////////////////
function controller(HomeService) {

  var vm = this;

  vm.shouldFormBeDisabled = shouldFormBeDisabled;
  vm.postToken = postToken;

  // //////////////////////////////

  function shouldFormBeDisabled() {
    return vm.tokenForm.$invalid;
  }

  function postToken() {
    HomeService.postToken(vm.token).then(() =>{
      window.location.href = '/course-selection';
    }).catch(error => {
      console.log(error);
    });
  }
}
