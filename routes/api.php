<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
		return $request->user();
});

/* Resource Route Guide
		get - /term - index
		get - /term/create - create
		post - /term - store
		get - /term/{anything} - show
		get - /term/{anything}/edit - edit
		post - /term/{anything} - update
		delete - /term/{anything} - destroy
*/

Route::group(['prefix' => 'admin'], function () {

		Route::resource('feedback','FeedbackController');
		Route::post('feedback/start', ['uses' => 'FeedbackController@start']);

		Route::post('questions/fixed/isAvailable', ['uses' => 'FixedQuestionController@isAvailable']);
		Route::resource('questions/fixed','FixedQuestionController');

		Route::get('questions/custom/courses', ['uses' => 'CustomQuestionController@courses']);
		Route::get('questions/custom/courses/{course_id}', ['uses' => 'CustomQuestionController@courseWise']);
		Route::post('questions/custom/link', ['uses' => 'CustomQuestionController@link']);
		Route::resource('questions/custom','CustomQuestionController');

		Route::get('questions/{i_question_id}', ['uses' => 'FixedQuestionController@show']);

		Route::resource('program-course-term','ProgramCourseTermController');

		Route::resource('options','OptionsController');

		// Pending
		Route::post('import/term', ['uses' => 'ImportController@importTerm']);
		Route::post('import/term/{term_id}', ['uses' => 'ImportController@importProgramCourse']);
		Route::post('import/students', ['uses' => 'ImportController@importStudents']);
		//Route::resource('import/term','ImportController');
		Route::resource('user','UserMasterController');

});
