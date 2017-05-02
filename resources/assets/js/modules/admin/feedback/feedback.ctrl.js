angular
  .module('app.admin.feedback')
  .controller('FeedbackController', controller);

controller.$inject = ['FeedbackService'];

function controller(FeedbackService) {

  var vm = this;

  vm.editFeedback = editFeedback;

  _setDefaults();
  // _getData();

// /////////////////////////////////////////////////

  function editFeedback(feedback) {
    console.log(feedback);
  }

  function _getData() {

  }

  function _setDefaults() {
    vm.feedbacks = [
      {
        'id': 1,
        'name': 'Autumn',
        'course': 'Computer Networks',
        'programs': [
          {
            'name': 'MSc',
            'startDate': '20/4/2017',
            'endDate': '30/4/2017',
            'enabled': false
          }
        ]
      }
    ];
  }
}
