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

Route::get('/teams/{id}', 'TeamController@show');
Route::get('/teams', 'TeamController@index')->name('allTeams');

Route::get('/players/{id}', 'PlayerController@show');
Route::get('/players', 'PlayerController@index');

Route::get('/register', 'RegistersController@create')->name('register');
Route::post('/register', 'RegistersController@store');

Route::get('/login', 'LoginsController@create')->name('show-login');
Route::post('/login','LoginsController@store')->name('login');

Route::get('/logout', 'LoginsController@logout')->name('logout');

