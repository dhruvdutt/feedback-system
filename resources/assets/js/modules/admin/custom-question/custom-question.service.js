angular
  .module('app.admin.customQuestion')
  .factory('CustomQuestionService', service);

service.$inject = ['$rootScope'];

function service($rootScope) {

  return {
    getCourses: getCourses,
    getQuestions: getQuestions,
    getData: getData,
    getCourseQuestions: getCourseQuestions,
    addUpdateQuestion: addUpdateQuestion,
    linkCourseQuestion: linkCourseQuestion
  };

  function getCourses() {
    return new Promise(function(resolve, reject) {
      axios.get('questions/custom/courses').then(function(response) {
        resolve(response.data.data);
      }).catch(function(error) {
        console.log(error);
        reject(error);
      });
    });
  }

  function getQuestions() {

    return new Promise(function(resolve, reject) {
      axios.get('questions/custom').then(function(response) {

        response.data.data.forEach(function(r) {
          r.lec = r.lecture == 0 ? false : true;
          r.labs = r.lab == 0 ? false : true;
          r.tut = r.tutorial == 0 ? false : true
        });

        resolve(response.data.data);
      }).catch(function(error) {
        console.log(error);
        reject(error);
      });
    });

  }

  function getData() {
    return new Promise(function(resolve, reject) {
      axios.get('questions/custom/create').then(function(response) {
        resolve(response.data.data);
      }).catch(function(error) {
        console.log(error);
        reject();
      })
    });
  }

  function getCourseQuestions(course_id) {
    return new Promise(function(resolve, reject) {
      axios.get('questions/custom/courses/' + course_id).then(function(response) {
        resolve(response.data.data);
      }).catch(function(error) {
        console.log(error);
        reject();
      })
    });
  }

  function addUpdateQuestion(course_id, question, customOptions) {

    var q = {
      course_id: course_id,
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

      axios.post('questions/custom', q).then(function(response) {
        resolve();
        $rootScope.$broadcast('CUSTOM_QUESTION_ADD_UPDATE');
      }).catch(function(error) {
        console.log(error);
        reject();
      });

    });
  }

  function linkCourseQuestion(question, course) {

    var link = {
      course_id: course,
      i_question_id: question
    };

    return new Promise(function(resolve, reject) {
      axios.post('questions/custom/link', link).then(function(response) {
        console.log(response);
        resolve();
      }).catch(function(error) {
        console.log(error);
        reject();
      })
    });

  }
}
