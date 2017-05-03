angular
  .module('app.admin.feedback')
  .controller('AddFeedbackController', controller);

controller.$inject = ['$scope', '$mdDialog', 'FeedbackService'];

function controller($scope, $mdDialog, FeedbackService, feedback) {

  var vm = this;

  vm.addUpdateFeedback = addUpdateFeedback;
  vm.closeDialog = closeDialog;

  _setDefaults();
  _getPrograms();

// /////////////////////////////////////

  function addUpdateFeedback() {
    FeedbackService.addUpdateFeedback(
      angular.copy(vm.feedback), angular.copy(vm.programs)
    ).then(function() {
      closeDialog();
    }).catch(function(error) {
      console.log(error);
    });
  }

  function closeDialog() {
    $mdDialog.cancel();
  }

  function _getPrograms() {
    FeedbackService.getPrograms().then(function(response) {
      vm.programs = response;
      $scope.$apply();
    }).catch(function(error) {
      console.log(error);
    });
  }

  function _setDefaults() {
    vm.feedback = {};
    vm.programs = [];
  }

}
