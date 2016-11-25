<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'FrontController@index');
Route::get('contact', 'FrontController@contact');
Route::get('reviews','FrontController@reviews');

Route::resource('groups', 'GroupController');
Route::resource('users', 'UserController');
Route::resource('practices', 'PracticeController');
Route::resource('resources', 'ResourceController');
Route::resource('admin','AdminController');
Route::resource('student','StudentController');
Route::resource('instructor','InstructorController');
Route::resource('login','LoginController');
Route::resource('logout', 'LoginController@logout');
