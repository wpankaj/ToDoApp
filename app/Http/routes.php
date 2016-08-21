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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', "HomeController@index");

Route::group(["middleware"=>"auth"], function(){

  Route::resource('projects', 'ProjectController');
  Route::resource('tasks', 'TaskController');
  Route::resource('subtasks', 'SubtaskController');

});

Route::controllers([
  "auth"=>"Auth\AuthController",
  "password"=>"Auth\PasswordController"

]);
