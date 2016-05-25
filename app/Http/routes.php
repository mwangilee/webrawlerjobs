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

Route::any('/', 'HomeController@login');

Route::any('/home', 'HomeController@jobs');

Route::any('/fileupload', 'HomeController@fileupload');

Route::any('/jobposts', 'HomeController@jobs');

Route::any('/dashboard', 'HomeController@jobs');

Route::any('/logout', 'HomeController@logout');

Route::any('/approvals/{idx}', 'HomeController@approvals');

Route::any('/delete_posts/{idx}', 'HomeController@delete_posts');

Route::any('/approve_posts/{idx}', 'HomeController@approve_posts');

//Route::any('/approvals', 'HomeController@approvals'); 


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


