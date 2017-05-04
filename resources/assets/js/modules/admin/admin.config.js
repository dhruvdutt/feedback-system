angular.module('app.admin', [
  'app.admin.feedback',
  'app.admin.auth',
  'app.admin.fixedQuestion',
  'app.admin.customQuestion'
]);

require('./feedback/feedback.config');
require('./login/login.config');
require('./fixed-question/fixed-question.config');
require('./custom-question/custom-question.config');
