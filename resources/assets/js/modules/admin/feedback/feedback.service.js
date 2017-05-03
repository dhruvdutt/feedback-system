angular
  .module('app.admin.feedback')
  .factory('FeedbackService', service);

service.$inject = ['$rootScope'];

function service($rootScope) {

  return {
    getData: getData,
    getPrograms: getPrograms,
    addUpdateFeedback: addUpdateFeedback,
    toggleFeedbackActive: toggleFeedbackActive
  };

  function getData() {
    return new Promise(function(resolve, reject) {
      axios.get('feedback').then(response => {
        response.data.data.active.forEach(function(r) {
          r.start = r.start_flag == 0 ? false : true
        });
        resolve(response.data.data);
      }).catch(error => {
        console.log(error);
        reject(error);
      });
    });
  }

  function getPrograms() {
    return new Promise(function(resolve, reject) {
      axios.get('/feedback/create').then(response => {
        console.log(response);
        resolve(response.data.data);
      }).catch(error => {
        console.log(error);
      })
    });
  }

  function addUpdateFeedback(feedback, programs) {
    var p = programs.map(function(program) {
      return {
        program_id: program.program_id,
        start_date: program.start_date,
        end_date: program.end_date
      }
    });

    var f = {
      feedback_name: feedback.feedback_name,
      programs: p
    };

    return new Promise(function(resolve, reject) {
      axios.post('feedback', f).then(response => {
        resolve();
        $rootScope.$broadcast('FEEDBACK_ADD_UPDATE');
      }).catch(error => {
        reject(error);
        console.log(error);
      });
    });
  }

  function toggleFeedbackActive(feedback) {

    var toggleFeedback = {
      feedback_id: feedback.feedback_id,
      start_flag: feedback.start ? 1 : 0
    };

    return new Promise(function(resolve, reject) {
      axios.post('feedback/start', toggleFeedback).then(function(response) {
        resolve();
      }).catch(function(error) {
        console.log(error);
        reject();
      })
    });
  }
}
