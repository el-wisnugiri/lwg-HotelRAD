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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

