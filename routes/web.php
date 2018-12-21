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

Route::get('/tours', 'GuestController@getTours')->middleware('role:guest');

Route::get('/watch_users', 'AgentController@getToursAndUsers')->middleware('role:agent');

Route::get('/create_tour', 'AgentController@getCreateTour')->middleware('role:agent');
Route::post('/create_tour', 'AgentController@createTour')->middleware('role:agent');

Route::get('/edit_tour', 'AgentController@getEditTour')->middleware('role:agent');
Route::post('/edit_tour', 'AgentController@editTour')->middleware('role:agent');

Route::get('/all_users', 'AdminController@showUsers')->middleware('role:admin');

Route::get('/edit_users', 'AdminController@getEditUsers')->middleware('role:admin');
Route::post('/edit_users', 'AdminController@editUsers')->middleware('role:admin');

Route::get('/add_users', 'AdminController@getAddUsers')->middleware('role:admin');
Route::post('/add_users', 'AdminController@addUsers')->middleware('role:admin');

Route::get('/delete_users', 'AdminController@getDeleteUsers')->middleware('role:admin');
Route::post('/delete_users', 'AdminController@deleteUsers')->middleware('role:admin');

