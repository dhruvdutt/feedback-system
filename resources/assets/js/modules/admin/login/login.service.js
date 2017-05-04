angular
  .module('app.admin.auth')
  .factory('LoginService', service);

function service() {

  return {
    login: login
  };

  function login(user) {
    return new Promise(function(resolve, reject) {
      axios.post('auth', user).then(function(response) {
        resolve();
      }).catch(function(error) {
        resolve(error.statusText);
      });
    });
  }
}
