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

Route::get('/', 'PagesController@index');
Route::get('/charities', 'PagesController@charities');
Route::get('/information', 'PagesController@information');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/events', 'EventsController@index');
Route::get('/events/{id}', 'EventsController@show');

Route::get('/2017-sponsors', 'SponsorsController@index');


Route::post('/events', 'EventsController@store');

/* **************ADMIN STUFF*********************** */
Route::group(['middleware' => 'leveemanager'], function() {
  Route::get('/admin/events/create', 'EventsController@create');
  Route::get('/admin/events', 'EventsController@adminEvents');
  Route::get('/admin/events/{id}/edit', 'EventsController@edit');
  Route::post('/admin/events/{id}/edit', 'EventsController@update');

  Route::get('/admin/sponsors', 'SponsorsController@adminIndex');
  Route::get('/admin/sponsors/create', 'SponsorsController@create');
  Route::post('/admin/sponsors', 'SponsorsController@store');
  Route::get('/admin/sponsors/{id}/edit', 'SponsorsController@edit');
  Route::post('/admin/sponsors/{id}/edit', 'SponsorsController@update');
});

Route::group(['middleware' => 'supermanager'], function() {
  Route::get('/admin/roles/index', 'RolesController@index');
  Route::get('/admin/roles/create', 'RolesController@create');
  Route::post('/admin/roles', 'RolesController@store');

  Route::get('/admin/users', 'UsersController@index');
  Route::get('/admin/users/{id}/edit', 'UsersController@edit');
  Route::post('/admin/users/{id}/edit', 'UsersController@update');
});
