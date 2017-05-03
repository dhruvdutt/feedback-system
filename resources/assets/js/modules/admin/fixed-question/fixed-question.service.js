angular
  .module('app.admin.fixedQuestion')
  .factory('FixedQuestionService', service);

service.$inject = ['$rootScope'];

function service($rootScope) {

  return {
    getQuestions: getQuestions,
    getData: getData,
    addUpdateQuestion: addUpdateQuestion
  };

  function getQuestions() {

    return new Promise(function(resolve, reject) {
      axios.get('questions/fixed').then(function(response) {

        response.data.data.forEach(function(r) {
          r.lec = r.lecture == 0 ? false : true;
          r.labs = r.lab == 0 ? false : true;
          r.tut = r.tutorial == 0 ? false : true
        });

        resolve(response.data.data);
      }).catch(function(error) {
        console.log(error);
        reject(error);
      })
    });

  }

  function getData() {
    return new Promise(function(resolve, reject) {
      axios.get('questions/fixed/create').then(function(response) {
        resolve(response.data.data);
      }).catch(function(error) {
        console.log(error);
        reject();
      })
    });
  }

  function addUpdateQuestion(question, customOptions) {

    var q = {
      question: question.question,
      answer_type_id: question.answer_type_id,
      lecture: question.lec ? 1 : 0,
      lab: question.labs ? 1 : 0,
      tutorial: question.tut ? 1 : 0
    };

    if (customOptions.length) {
      q.customOptions = customOptions;
    }

    return new Promise(function(resolve, reject) {

      axios.post('questions/fixed', q).then(function(response) {
        resolve();
        $rootScope.$broadcast('FIXED_QUESTION_ADD_UPDATE');
      }).catch(function(error) {
        console.log(error);
        reject();
      });

    });
  }
}
