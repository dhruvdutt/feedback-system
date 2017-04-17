<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::post('/', ['uses' => 'HomeController@checkToken']);

// Route::get('/course-selection', ['uses' => 'CourseController@index']);

// Route::get('/feedback', ['uses' => 'FeedbackController@index']);
// Route::post('/feedback', ['uses' => 'FeedbackController@create']);

// Rating
// Route::get('/rating', ['uses' => 'RatingController@index']);
// Route::post('/rating', ['uses' => 'RatingController@create']);

/*
For all the routes listed below following conventions will be followed using first term as an example


get - /term - index
get - /term/create - create
post - /term - store
get - /term/{anything} - show
get - /term/{anything}/edit - edit
post - /term/{anything} - update
delete - /term/{anything} - destroy

*/

// Route::resource('term','TermController');

/*Route::get('/answer','AnswerMasterController@index');*/

// Route::resource('answer','AnswerMasterController');
// Route::resource('attendance','AttendanceController');
// Route::resource('course','CourseMasterController');
// Route::resource('feedback','FeedbackController');
// Route::resource('metadata','FeedbackMetadataController');
// Route::resource('program','ProgramMasterController');
// Route::resource('programCourse','ProgramCourseTermController');
// Route::resource('question','QuestionMasterController');
// Route::resource('radio','RadioOptionsMasterController');
// Route::resource('studentFeedback','StudentFeedbackMasterController');
// Route::resource('user','UserMasterController');

// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'web'], function () {

  Route::group(['prefix' => 'settings'], function () {
    // Route::get('terms', ['uses' => 'AdminController@terms']);
	Route::resource('term','TermController');
    Route::resource('answer','AnswerMasterController');
	Route::resource('attendance','AttendanceController');
	Route::resource('course','CourseMasterController');
	Route::resource('feedback','FeedbackController');
	Route::resource('metadata','FeedbackMetadataController');
	Route::resource('program','ProgramMasterController');
	Route::resource('programCourse','ProgramCourseTermController');
	Route::resource('question','QuestionMasterController');
	Route::resource('radio','RadioOptionsMasterController');
	Route::resource('studentFeedback','StudentFeedbackMasterController');
	Route::resource('user','UserMasterController');
  });

  Route::get('dashboard', ['uses' => 'AdminController@dashboard']);
});
