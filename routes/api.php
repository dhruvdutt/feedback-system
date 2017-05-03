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
		Route::resource('questions/fixed','FixedQuestionController');
		Route::resource('questions/custom','FixedQuestionController');
});
