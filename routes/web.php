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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@AdminControlPanel');

Route::get('/tours', 'GuestController@getTours');

Route::get('/watch_users', 'AgentController@getToursAndUsers');

Route::get('/create_tour', 'AgentController@getCreateTour');
Route::post('/create_tour', 'AgentController@createTour');

Route::get('/edit_tour', 'AgentController@getEditTour');
Route::post('/edit_tour', 'AgentController@editTour');

Route::get('/all_users', 'AdminController@showUsers');

Route::get('/edit_users', 'AdminController@getEditUsers');
Route::post('/edit_users', 'AdminController@editUsers');

Route::get('/add_users', 'AdminController@getAddUsers');
Route::post('/add_users', 'AdminController@addUsers');

Route::get('/delete_users', 'AdminController@getDeleteUsers');
Route::post('/delete_users', 'AdminController@deleteUsers');

