angular
  .module('app.admin.fixedOption')
  .controller('FixedOptionController', controller);

controller.$inject = ['FixedOptionService', '$scope', '$mdDialog'];

function controller(FixedOptionService, $scope, $mdDialog) {

  var vm = this;

  vm.openAddUpdateOptionModal = openAddUpdateOptionModal;
  vm.closeDialog = closeDialog;

  _setDefaults();
  _getData();

  $scope.$on('FIXED_OPTION_ADD_UPDATE', function() {
    _getData();
  });

// ////////////////////////////////////////


  function openAddUpdateOptionModal(option) {

    $mdDialog.show({
      controller: 'AddFixedOptionController as vm',
      templateUrl: '/html/fixed-option-add.html',
      clickOutsideToClose:true,
      fullscreen: true,
      resolve: {
        option: function() {
          return angular.copy(option);
        }
      }
    });

  }

  function closeDialog() {
    $mdDialog.cancel();
  }

  function _getData() {

    var promise = FixedOptionService.getData();

    vm.promise = promise;

    promise.then(function(response) {
      vm.options = response;
      $scope.$apply();
    });

  }

  function _setDefaults() {
    vm.options = [];
  }
}
