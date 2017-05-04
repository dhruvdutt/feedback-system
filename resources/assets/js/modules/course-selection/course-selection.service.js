angular
  .module('app.courseSelection')
  .service('CourseSelectionService', service);

service.$inject =  ['$cookies'];

function service($cookies) {

  return {
    getData: getData
  };

  function getData() {

    return new Promise(function(resolve, reject) {
      var data = [];
      var core = [];
      var electives = [];

      data[0] = $cookies.getObject('program');
      var courses = $cookies.getObject('courses');

      courses.forEach(function(course) {
        if (course.course_type === 'core') {
          core.push(course);
        } else {
          electives.push(course);
        }
      });

      data[1] = core;
      data[2] = electives;

      resolve(data);
    });
  }

}
