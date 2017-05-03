angular.module('app.admin', [
  'app.admin.feedback',
  'app.admin.fixedQuestion',
  'app.admin.customQuestion'
]);

require('./feedback/feedback.config');
require('./fixed-question/fixed-question.config');
require('./custom-question/custom-question.config');
