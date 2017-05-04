angular
  .module('app.home')
  .service('HomeService', service);

service.$inject =  ['$cookies'];

function service($cookies) {

  return {
    postToken: postToken
  };

  function postToken(token) {

    return new Promise(function(resolve, reject) {

      var data = {
        token: token
      };

      axios.post('student', data).then((response) => {
        console.log(response);
        $cookies.putObject('program', response.data.data.program);
        $cookies.putObject('courses', response.data.data.courses);
        resolve();
      }).catch(error => {
        console.log(error);
        reject(error);
      });

    });
  }

}
