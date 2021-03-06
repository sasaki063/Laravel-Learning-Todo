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

Route::get('/task', 'TaskController@index');
Route::post('/task', 'TaskController@post');
Route::delete('/task/{task}', 'TaskController@delete');
Route::put('/task/{task}', 'TaskController@update');
Route::post('/task', 'TaskController@search');
