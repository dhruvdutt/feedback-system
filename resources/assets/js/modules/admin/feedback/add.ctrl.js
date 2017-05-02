angular
  .module('app.admin.feedback')
  .controller('AddFeedbackController', controller);

controller.$inject = [];

function controller() {

  let vm = this;

  vm.feedback = {
    name: 'Autumn',
    course: 'Computer Networks',
    programs: [
      {
        name: 'MSc',
        startDate: new Date(),
        endDate: new Date()
      }
    ]
  };


}
