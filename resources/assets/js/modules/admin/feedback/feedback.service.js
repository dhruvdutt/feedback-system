angular
  .module('app.admin.feedback')
  .factory('FeedbackService', service);

service.$inject = [];

function service() {

  return {
    getData: getData
  };

  function getData() {
    return new Promise(function(resolve, reject) {
      axios.get('/feedback').then(response => {
        resolve(response.data);
      }).catch(error => {
        console.log(error);
        reject(error);
      });
    });
  }
}
