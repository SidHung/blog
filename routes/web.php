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
Route::get('login', 'LoginController@showLoginForm');

Route::post('login', 'LoginController@authenticate');

Route::get('logout', 'LoginController@logout');

Route::get('register', 'LoginController@showRegistrationForm');

Route::post('register', 'LoginController@createUser');

Route::resource('task', 'TaskController');

// Route::get('task', 'TaskController@index');

// Route::get('task/create', 'TaskController@create');

// Route::post('task', 'TaskController@store');

// Route::get('task/{id}/edit', 'TaskController@edit');

// Route::put('task/{id}', 'TaskController@update');

// Route::delete('task/{id}', 'TaskController@destroy');

// Route::get('/task/{id}', 'TaskController@show');

//我只是個分隔線

Route::resource('articles', 'ArticlesController');

// Route::get('articles','ArticlesController@index');

// Route::get('articles/create', 'ArticlesController@create');

// Route::post('articles', 'ArticlesController@store');

// Route::get('articles/{id}/edit', 'ArticlesController@edit');

// Route::put('articles/{id}', 'ArticlesController@update');

// Route::delete('articles/{id}', 'ArticlesController@destroy');

// Route::get('/articles/{id}','ArticlesController@show');

//我是分隔線

Route::resource('category', 'CategoryController');

// Route::get('category', 'CategoryController@index');

// Route::get('category/create', 'CategoryController@create');

// Route::post('category', 'CategoryController@store');

// Route::get('category/{id}/edit', 'CategoryController@edit');

// Route::put('category/{id}', 'CategoryController@update');

// Route::delete('category/{id}', 'CategoryController@destroy');

// Route::get('category/{id}', 'CategoryController@show');


