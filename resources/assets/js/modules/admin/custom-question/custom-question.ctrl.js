angular
  .module('app.admin.customQuestion')
  .controller('CustomQuestionController', controller);

controller.$inject = ['CustomQuestionService', '$scope', '$mdDialog'];

function controller(CustomQuestionService, $scope, $mdDialog) {

  var vm = this;

  vm.setQuestionModel = setQuestionModel;
  vm.openAddUpdateQuestionModal = openAddUpdateQuestionModal;

  _setDefaults();
  _getCourses();
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

  function _getCourses() {

    var promise = CustomQuestionService.getCourses();

    promise.then(function(response) {
      vm.courses = response;
      $scope.$apply();
    });

  }

  function _getData() {

    var promise = CustomQuestionService.getQuestions();

    vm.promise = promise;

    promise.then(function(response) {
      vm.questions = response;
      $scope.$apply();
    });

  }

  function _setDefaults() {
    vm.question = {};
    vm.courses = [];
    vm.course = null;
    vm.addQuestionEnabled = false;
    vm.questions = [];
  }
}
