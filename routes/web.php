<?php

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Route;

>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
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
<<<<<<< HEAD
    return view('pages.index');
});

route::get('/createPost', 'taskController@create');

route::post('/createPost', 'taskController@store');

route::get('/tasks', 'taskController@index');

route::get('/delete/{id}', 'taskController@destroy'); 
=======
    return view('welcome');
});
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
