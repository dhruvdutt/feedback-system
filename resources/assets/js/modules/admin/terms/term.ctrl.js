angular.module('app.admin.terms')
  .controller('TermController', controller);

function controller($mdDialog) {
  var vm = this;

  console.log('$mdDialog', $mdDialog);

  vm.showPrompt = function(ev) {
    // Appending dialog to document.body to cover sidenav in docs app
    $mdDialog.show({
      controller: 'DialogController',
      templateUrl: './addTerm.dialog.html',
      parent: angular.element(document.body),
      targetEvent: ev,
      clickOutsideToClose:true,
      fullscreen: vm.customFullscreen
    })
      .then(function(answer) {
        console.log('answer:', answer);
      });
  };
}
