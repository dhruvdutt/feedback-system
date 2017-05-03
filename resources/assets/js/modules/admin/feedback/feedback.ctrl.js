angular
  .module('app.admin.feedback')
  .controller('FeedbackController', controller);

controller.$inject = ['$mdDialog', 'FeedbackService', '$scope'];

function controller($mdDialog, FeedbackService, $scope) {

  var vm = this;

  vm.editFeedback = editFeedback;
  vm.toggleFeedbackActive = toggleFeedbackActive;
  vm.openAddUpdateFeedbackModal = openAddUpdateFeedbackModal;

  _setDefaults();
  _getData();

  $scope.$on('FEEDBACK_ADD_UPDATE', function() {
    _getData();
  });

// /////////////////////////////////////////////////

  function editFeedback(feedback) {
    console.log(feedback);
  }

  function openAddUpdateFeedbackModal(feedback) {

    $mdDialog.show({
      controller: 'AddFeedbackController as vm',
      templateUrl: '/html/feedback-add.html',
      clickOutsideToClose:true,
      fullscreen: true,
      resolve: {
        feedback: function() {
          return angular.copy(feedback);
        }
      }
    });
  }

  function toggleFeedbackActive(feedback) {

    var confirm = $mdDialog.confirm()
          .title('Confirm action')
          .textContent(
            feedback.start ? 'The feedback will be started' : 'The feedback will be ended'
          )
          .ariaLabel('Confirm action')
          .ok('Confirm')
          .cancel('Cancel');

    $mdDialog.show(confirm).then(function() {
      FeedbackService.toggleFeedbackActive(feedback).then(function() {
        _getData();
      }).catch();
    }, function() {
      feedback.start = !feedback.start;
    });
  }

  function _getData() {

    var promise = FeedbackService.getData();
    vm.promise = promise;

    promise.then(function(response) {
      vm.active = response.active;
      vm.recent = response.recent;
      $scope.$apply();
    }).catch(function(error) {
      console.log(error);
    });
  }

  function _setDefaults() {
    vm.active = [];
    vm.recent = [];
    vm.query = {
      order: 'feedback_name',
      limit: 5,
      page: 1
    }
  }
}
