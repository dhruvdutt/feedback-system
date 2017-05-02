angular.module('app.admin', [
  'app.admin.feedback',
  'app.admin.fixedQuestion'
]);

require('./feedback/feedback.config');
require('./fixed-question/fixed-question.config');
