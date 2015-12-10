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

Route::get('/', 'HomeController@login');
Route::get('home', 'HomeController@home');
Route::get('studentInfo', 'HomeController@studentInfo');
Route::get('teamInfo', 'HomeController@teamInfo');

Route::PATCH('studentInfo','HomeController@update');





Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


//admin Routes
Route::get('showStudents', 'AdminController@showStudents');
Route::get('showTeams', 'AdminController@createTeams');
Route::post('showTeams', 'AdminController@createTeams');

Route::controllers([
    'password' => 'Auth\PasswordController',
]);
