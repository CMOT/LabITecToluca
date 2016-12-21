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
Route::get('admins', 'FrontController@admin');
Route::get('reviews','FrontController@reviews');
//Route::get('instructor/group','InstructorController@group');
//Route::get('instructor','InstructorController@index');
//Route::get('instructor/show','InstructorController@show');
//Route::get('instructor/create','InstructorController@create');


Route::resource('groups', 'GroupController');
Route::resource('instructor/course', 'CourseController');
Route::resource('users', 'UserController');
Route::resource('practices', 'PracticeController');
Route::resource('resources', 'ResourceController');
Route::resource('admin','AdminController');
Route::resource('student','StudentController');
Route::resource('instructor','InstructorController');
Route::resource('login','LoginController');
Route::resource('logout', 'LoginController@logout');
Route::resource('course/section', 'SectionController');

