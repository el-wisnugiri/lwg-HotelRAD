<?php

use Illuminate\Support\Facades\Route;

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
// all the routes for rates
Auth::routes();

Route::resource('/rates', 'RatesController');

Route::get('/rates', 'RatesController@index')->name('home');
Route::post('/rates', 'RatesController@store');
Route::get('/rates /create', 'RatesController@create');
Route::get('/rates /{rates}', 'RatesController@show');
Route::get('/rates /{rates} /edit', 'RatesController@edit');
Route::put('/rates /{rates}', 'RatesController@update');
Route::patch('/rates /{rates}', 'RatesController@update');
Route::delete('/rates /{rates}', 'RatesController@destroy');


// all the routes for feedback Subjects
Auth::routes();

Route::resource('/feedbackSubjects', 'FeedbackSubjectController');

Route::get('/feedbackSubjects', 'FeedbackSubjectController@index')->name('home');
Route::post('/feedbackSubjects', 'FeedbackSubjectController@store');
Route::get('/feedbackSubjects /create', 'FeedbackSubjectController@create');
Route::get('/feedbackSubjects /{feedbacksubjects}', 'FeedbackSubjectController@show');
Route::get('/feedbackSubjects /{feedbacksubjects} /edit', 'FeedbackSubjectController@edit');
Route::put('/feedbackSubjects /{feedbacksubjects}', 'FeedbackSubjectController@update');
Route::patch('/feedbackSubjects /{feedbacksubjects}', 'FeedbackSubjectController@update');
Route::delete('/feedbackSubjects /{feedbacksubjects}', 'FeedbackSubjectController@destroy');


// all the routes for room Statuses
Auth::routes();

Route::resource('/roomStatuses', 'RoomStatusesController');

Route::get('/roomStatuses', 'RoomStatusesController@index')->name('home');
Route::post('/roomStatuses', 'RoomStatusesController@store');
Route::get('/roomStatuses /create', 'RoomStatusesController@create');
Route::get('/roomStatuses /{roomStatuses}', 'RoomStatusesController@show');
Route::get('/roomStatuses /{roomStatuses} /edit', 'RoomStatusesController@edit');
Route::put('/roomStatuses /{roomStatuses}', 'RoomStatusesController@update');
Route::patch('/roomStatuses /{roomStatuses}', 'RoomStatusesController@update');
Route::delete('/roomStatuses /{roomStatuses}', 'RoomStatusesController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

