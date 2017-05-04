angular
  .module('app.admin.fixedQuestion')
  .controller('AddCustomQuestionController', controller);

controller.$inject = ['$scope', '$mdDialog', 'CustomQuestionService'];

function controller($scope, $mdDialog, CustomQuestionService, feedback) {

  var vm = this;

  vm.addUpdateQuestion = addUpdateQuestion;
  vm.addCustomOption = addCustomOption;
  vm.closeDialog = closeDialog;
  vm.toggleCustomOptions = toggleCustomOptions;

  _setDefaults();
  _getData();
  _getCourses();

// /////////////////////////////////////

  function addUpdateQuestion() {

    if (vm.question.answer_type_id == 2) {
      vm.customOptions = [];
    }

    CustomQuestionService.addUpdateQuestion(
      angular.copy(vm.course), angular.copy(vm.question), angular.copy(vm.customOptions)
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

    vm.loading = true;

    CustomQuestionService.getData().then(function(response) {
      vm.answerTypes = response.answerTypes;
      vm.defaultOptions = response.defaultOptions;
      vm.loading = false;
      $scope.$apply();
    }).catch(function(error) {
      console.log(error);
      vm.loading = false;
    });
  }

  function _getCourses() {

    vm.courseLoading = true;

    CustomQuestionService.getCourses().then(function(response) {
      vm.courses = response;
      vm.courseLoading = false;
      $scope.$apply();
    }).catch(function(error) {
      console.log(error);
      vm.courseLoading = false;
    });
  }

  function _setDefaults() {
    vm.question = {};
    vm.courses = [];
    vm.loading = false;
    vm.courseLoading = false;
    vm.customOptionsEnabled = false;
    vm.answerTypes = [];
    vm.defaultOptions = [];
    vm.customOptions = [];
    vm.customOption = null;
  }

}
