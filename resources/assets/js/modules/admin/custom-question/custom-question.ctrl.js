angular
  .module('app.admin.customQuestion')
  .controller('CustomQuestionController', controller);

controller.$inject = ['CustomQuestionService', '$scope', '$mdDialog'];

function controller(CustomQuestionService, $scope, $mdDialog) {

  var vm = this;

  vm.setQuestionModel = setQuestionModel;
  vm.openAddUpdateQuestionModal = openAddUpdateQuestionModal;
  vm.closeDialog = closeDialog;
  vm.getCourseQuestions = getCourseQuestions;

  _setDefaults();
  _getCourses();

  $scope.$on('CUSTOM_QUESTION_ADD_UPDATE', function() {
    getCourseQuestions();
  });

// ////////////////////////////////////////

  function setQuestionModel(question) {
    vm.question = question;
  }

  function openAddUpdateQuestionModal() {

    $mdDialog.show({
      controller: 'AddCustomQuestionController as vm',
      templateUrl: '/html/custom-question-add.html',
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
      vm.course = response[0].course_id;
      getCourseQuestions();
      $scope.$apply();
    });

  }

  function closeDialog() {
    $mdDialog.cancel();
  }

  function getCourseQuestions() {

    var promise = CustomQuestionService.getCourseQuestions(vm.course);

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
