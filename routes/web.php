<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create somehing great!
|
*/
Route::get('/', 'HomeController@index');

Route::get('/blogs/', 'BlogController@index');
Route::get('/blogs/create', 'BlogController@create');
Route::get('/blogs/{blog}/edit', 'BlogController@edit');
Route::put('/blogs/{blog}', 'BlogController@update');
Route::delete('/blogs/{blog}', 'BlogController@delete');
Route::get('/blogs/{blog}', 'BlogController@show');
Route::post('/blogs', 'BlogController@store');

Route::get('/categorys/', 'CategoryController@index');
Route::get('/categorys/solo', 'CategoryController@solo');
Route::get('/categorys/group', 'CategoryController@group');
Route::get('/categorys/livepaint', 'CategoryController@livepaint');
Route::get('/categorys/request', 'CategoryController@request');

Route::get('/solos/', 'SoloController@index');









