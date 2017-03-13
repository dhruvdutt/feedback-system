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

Route::get('/course-selection', ['uses' => 'CourseController@index']);
Route::get('/feedback', ['uses' => 'FeedbackController@index']);

// Rating
Route::get('/rating', ['uses' => 'RatingController@index']);
Route::post('/rating', ['uses' => 'RatingController@create']);

// Feedback submitted
Route::get('/thankyou', ['uses' => 'FeedbackController@thankyou']);
