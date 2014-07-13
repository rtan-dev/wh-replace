<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// User Routes
Route::get('/', 'UserController@getLogin');
Route::get('login', 'UserController@getLogin');
Route::get('register', 'UserController@getRegister');
Route::post('register', 'UserController@postRegister');
// Character Routes

// Equip Routes
