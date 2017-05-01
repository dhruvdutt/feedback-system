angular
  .module('app.home')
  .service('HomeService', service);

function service() {

  return {
    postToken: postToken
  };

  function postToken(token) {

    return new Promise(function(resolve, reject) {

      axios.post('/').then(() => {
        resolve();
      }).catch(error => {
        console.log(error);
        reject(error);
      });

    });
  }

}
