angular
  .module('app.admin.fixedOption')
  .controller('AddFixedOptionController', controller);

controller.$inject = ['$scope', '$mdDialog', 'FixedOptionService'];

function controller($scope, $mdDialog, FixedOptionService) {

  var vm = this;

  vm.addUpdateOption = addUpdateOption;
  vm.addCustomOption = addCustomOption;
  vm.closeDialog = closeDialog;
  vm.toggleCustomOptions = toggleCustomOptions;

  _setDefaults();

// /////////////////////////////////////

  function addUpdateOption() {

    if (vm.question.answer_type_id == 2) {
      vm.customOptions = [];
    }

    FixedOptionService.addUpdateOption(
      angular.copy(vm.question), angular.copy(vm.customOptions)
    ).then(function() {
      closeDialog();
    }).catch(function(error) {
      console.log(error);
    });
  }

  function closeDialog() {
    $mdDialog.cancel();
  }

  function _setDefaults() {
    vm.option = {};
  }

}
