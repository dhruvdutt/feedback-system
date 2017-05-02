angular
  .module('app.admin.fixedQuestion')
  .controller('FixedQuestionController', controller);

controller.$inject = [];

function controller() {

  var vm = this;

  vm.toggleEditable = toggleEditable;
  vm.toggleAddQuestion = toggleAddQuestion;
  vm.addUpdateFeedback = addUpdateFeedback;

  _setDefaults();
  _getData();

// ////////////////////////////////////////

  function toggleEditable(question) {
    question.isEditable = !question.isEditable;
  }

  function toggleAddQuestion() {
    vm.addQuestionEnabled = !vm.addQuestionEnabled;
  }

  function addUpdateFeedback() {
    console.log(vm.question);
  }

  function _getData() {}

  function _setDefaults() {
    vm.question = {};
    vm.addQuestionEnabled = false;
    vm.questions = [
      {
        id: 1,
        question: "What is rating for the subject?",
        answerType: "Radio",
        lab: false,
        lecture: true,
        tutorial: true,
        isEditable: false
      }
    ];
  }
}
