angular
.module('app.courseSelection')
.controller('CourseSelectionController', controller);

controller.$inject = ['CourseSelectionService', '$scope'];

// //////////////////////////////
function controller(CourseSelectionService, $scope) {

  var vm = this;

  vm.shouldFormBeDisabled = shouldFormBeDisabled;
  vm.postToken = postToken;

  _getData();
  _setDefaults();

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

  function _getData() {
    CourseSelectionService.getData().then((response) => {
      vm.program = response[0];
      vm.core = response[1];
      vm.electives = response[2];
      $scope.$apply();
    });
  }

  function _setDefaults() {
    vm.courseSelection = [];
  }
}
