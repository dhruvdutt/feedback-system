angular
  .module('app.admin.fixedQuestion')
  .controller('FixedQuestionController', controller);

controller.$inject = [];

function controller() {

  var vm = this;

  vm.setQuestionModel = setQuestionModel;
  vm.addUpdateFeedback = addUpdateFeedback;

  _setDefaults();
  _getData();

// ////////////////////////////////////////

  function setQuestionModel(question) {
    vm.question = question;
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
        answerType: "radio",
        lab: false,
        lecture: true,
        tutorial: true,
        isEditable: false
      }
    ];
  }
}
