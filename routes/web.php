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

// Pages
Route::get('/', 'PagesController@index')->name('home');
Route::get('setting', 'PagesController@setting')->name('setting');
Route::get('documentation', 'PagesController@documentation')->name('documentation');

Auth::routes();

// Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registrants Routes...
Route::get('registrants', 'RegistrantController@index')->name('registrants');
