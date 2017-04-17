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
Route::post('/', ['uses' => 'HomeController@checkToken']);

Route::get('/course-selection', ['uses' => 'CourseController@index']);

Route::get('/feedback', ['uses' => 'FeedbackController@index']);
Route::post('/feedback', ['uses' => 'FeedbackController@create']);

// Rating
Route::get('/rating', ['uses' => 'RatingController@index']);
Route::post('/rating', ['uses' => 'RatingController@create']);


Route::resource('term','TermController');

// Admin routes
Route::group(['prefix' => 'admin'], function () {

  Route::group(['prefix' => 'settings'], function () {
    Route::get('terms', ['uses' => 'AdminController@terms']);
  });

  Route::get('dashboard', ['uses' => 'AdminController@dashboard']);
});
