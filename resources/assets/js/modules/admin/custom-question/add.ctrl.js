angular
  .module('app.admin.fixedQuestion')
  .controller('AddFixedQuestionController', controller);

controller.$inject = ['$scope', '$mdDialog', 'FixedQuestionService'];

function controller($scope, $mdDialog, FixedQuestionService, feedback) {

  var vm = this;

  vm.addUpdateQuestion = addUpdateQuestion;
  vm.addCustomOption = addCustomOption;
  vm.closeDialog = closeDialog;
  vm.toggleCustomOptions = toggleCustomOptions;

  _setDefaults();
  _getData();

// /////////////////////////////////////

  function addUpdateQuestion() {

    if (vm.question.answer_type_id == 2) {
      vm.customOptions = [];
    }

    FixedQuestionService.addUpdateQuestion(
      angular.copy(vm.question), angular.copy(vm.customOptions)
    ).then(function() {
      closeDialog();
    }).catch(function(error) {
      console.log(error);
    });
  }

  function addCustomOption() {
    vm.customOptions.push(vm.customOption);
    vm.customOption = null;
  }

  function closeDialog() {
    $mdDialog.cancel();
  }

  function toggleCustomOptions() {
    vm.customOptionsEnabled = !vm.customOptionsEnabled;
    vm.customOptions = [];
  }

  function _getData() {
    FixedQuestionService.getData().then(function(response) {
      vm.answerTypes = response.answerTypes;
      vm.defaultOptions = response.defaultOptions
      $scope.$apply();
    }).catch(function(error) {
      console.log(error);
    });
  }

  function _setDefaults() {
    vm.question = {};
    vm.customOptionsEnabled = false;
    vm.answerTypes = [];
    vm.defaultOptions = [];
    vm.customOptions = [];
    vm.customOption = null;
  }

}
