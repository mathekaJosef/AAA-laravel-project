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

Route::get('/', function () {
    return view('pages.index');
});

route::get('/createPost', 'taskController@create');

route::post('/createPost', 'taskController@store');

route::get('/tasks', 'taskController@index');

route::get('/delete/{id}', 'taskController@destroy'); 
