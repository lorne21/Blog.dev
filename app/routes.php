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


Route::get('portfolio', 'HomeController@getPortfolio');

Route::get('/', 'PostsController@index');

Route::get('post_id', 'PostsController@storeComment');

Route::resource('posts', 'PostsController');

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');

Route::get('practice', 'HomeController@getPractice');


