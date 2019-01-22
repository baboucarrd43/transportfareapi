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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FaresController@index');
Route::get('/addfare','FaresController@create')->name('add');
Route::post('/addfare','FaresController@store');
Route::resource('fares', 'FaresController');
Route::get('fares/{id}','FaresController@show');


