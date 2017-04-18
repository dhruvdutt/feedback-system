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

Route::get('/', ['uses' => 'HomeController@index']);
Route::post('/', ['uses' => 'HomeController@checkToken']);

Route::get('/course-selection', ['uses' => 'CourseSelectionController@index']);
Route::post('/course-selection', ['uses' => 'CourseSelectionController@post']);

Route::get('/feedback', ['uses' => 'FeedbackController@index']);
Route::post('/feedback', ['uses' => 'FeedbackController@create']);

Route::get('/rating', ['uses' => 'RatingController@index']);
Route::post('/rating', ['uses' => 'RatingController@create']);

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

// ADMIN routes: /api/admin/settings/
Route::group(['prefix' => 'api', 'middleware' => 'web'], function () {
		Route::group(['prefix' => 'admin'], function () {
				Route::group(['prefix' => 'settings'], function () {
						Route::resource('term','TermController');
						Route::resource('answer','AnswerMasterController');
						Route::resource('attendance','AttendanceController');
						Route::resource('course','CourseMasterController');
						Route::resource('feedback','FeedbackController');
						Route::resource('metadata','FeedbackMetadataController');
						Route::resource('program','ProgramMasterController');
						Route::resource('programCourseTerm','ProgramCourseTermController');
						Route::resource('question','QuestionMasterController');
						Route::resource('radio','RadioOptionsMasterController');
						Route::resource('studentFeedback','StudentFeedbackMasterController');
						Route::resource('user','UserMasterController');
		  });

		  Route::get('dashboard', ['uses' => 'AdminController@dashboard']);
		});
});
