angular
  .module('app.admin.fixedQuestion')
  .controller('FixedQuestionController', controller);

controller.$inject = ['FixedQuestionService', '$scope', '$mdDialog'];

function controller(FixedQuestionService, $scope, $mdDialog) {

  var vm = this;

  vm.setQuestionModel = setQuestionModel;
  vm.openAddUpdateQuestionModal = openAddUpdateQuestionModal;

  _setDefaults();
  _getData();

  $scope.$on('FIXED_QUESTION_ADD_UPDATE', function() {
    _getData();
  });

// ////////////////////////////////////////

  function setQuestionModel(question) {
    vm.question = question;
  }

  function openAddUpdateQuestionModal() {

    $mdDialog.show({
      controller: 'AddFixedQuestionController as vm',
      templateUrl: '/html/fixed-question-add.html',
      clickOutsideToClose:true,
      fullscreen: true
      // resolve: {
      //   feedback: function() {
      //     return angular.copy(feedback);
      //   }
      // }
    });

  }

  function _getData() {

    var promise = FixedQuestionService.getQuestions();

    vm.promise = promise;

    promise.then(function(response) {
      vm.questions = response;
      $scope.$apply();
    });

  }

  function _setDefaults() {
    vm.question = {};
    vm.addQuestionEnabled = false;
    vm.questions = [];
  }
}
