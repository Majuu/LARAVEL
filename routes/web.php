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

Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::get('/koty', 'PagesController@getKoty');

Route::get('/papugi', 'PagesController@getPapugi');

Route::get('/sowy', 'PagesController@getSowy');

Route::get('/messages', 'MessagesController@getMessages');

Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');

Route::post('/contact/submit', 'MessagesController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategorias', 'KategoriaController@getKategorias');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
