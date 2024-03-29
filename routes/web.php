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

Route::get('/feedback', ['uses' => 'StudentFeedbackController@index']);
Route::post('/feedback', ['uses' => 'StudentFeedbackController@create']);

Route::get('/rating', ['uses' => 'RatingController@index']);
Route::post('/rating', ['uses' => 'RatingController@create']);

Route::get('/tokens', ['uses' => 'AdminController@generateTokens']);

/*
For all the routes listed below following conventions will be followed using first term as an example

get - /term - index
get - /term/create - create
post - /term - store
get - /term/{id} - show
get - /term/{id}/edit - edit
post - /term/{id} - update
delete - /term/{id} - destroy

*/

Route::group(['prefix' => 'admin'], function() {
	Route::get('login', ['uses' => 'AdminController@index']);
	Route::post('login', ['uses' => 'AdminController@login']);
	Route::get('dashboard', ['uses' => 'AdminController@dashboard']);
	Route::get('logout', ['uses' => 'AdminController@logout']);
});

// ADMIN routes: /admin/settings/
Route::group(['prefix' => 'admin'], function () {
	Route::group(['prefix' => 'settings'], function () {
			Route::get('feedback', ['uses' => 'AdminController@getFeedbackView']);
			Route::get('program-course-term', ['uses' => 'AdminController@getProgramCourseTermView']);
			Route::get('fixed-question', ['uses' => 'AdminController@getFixedQuestionsView']);
			Route::get('fixed-option', ['uses' => 'AdminController@getFixedOptionsView']);
			Route::get('custom-question', ['uses' => 'AdminController@getCustomQuestionsView']);
			Route::get('import/term', ['uses' => 'AdminController@getImportTermView']);
			Route::get('import/program-course', ['uses' => 'AdminController@getImportProgramCourseView']);
			Route::get('import/students', ['uses' => 'AdminController@getImportStudentsView']);
});

	Route::get('dashboard', ['uses' => 'AdminController@dashboard']);
});
