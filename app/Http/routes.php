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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','HomeController@index');
Route::get('/about','HomeController@about');
Route::get('student/home','StudentController@index');
Route::get('/student/create',"StudentController@createRole");
Route::get('/student/{id}',"StudentController@student");