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

Route::get('/', 'HomeController@getPractice');

Route::get('posts/manage', 'PostsController@getManage');

Route::get('posts/getList', 'PostsController@getList');

Route::resource('posts', 'PostsController');

Route::resource('projects', 'ProjectsController');

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');

Route::get('portfolio', 'HomeController@getPortfolio');

Route::get('practice', 'HomeController@getPractice');

Route::get('mole', 'HomeController@getMole');

Route::get('simon', 'HomeController@getSimon');

Route::get('puzzlepic', 'HomeController@getPuzzle');

Route::get('memory', 'HomeController@getMemory');

Route::get('hangman', 'HomeController@getHangman');

Route::get('clue', 'HomeController@getClue');

// Route::get('project', 'HomeController@getProject');

Route::get('index', 'PostsController@index');


