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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/projects/create', 'ProjectController@create')->name('projects/create');
Route::post('/projects', 'ProjectController@store');
Route::post('/projects_update', 'ProjectController@update')->name('projects_update');
Route::get('/edit_project/{id}', 'ProjectController@edit')->name('edit_project');
Route::get('/delete_project/{id}', 'ProjectController@destroy')->name('delete_project');


Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::get('/task/{id}', 'TaskController@show')->name('task');
Route::get('/edit_task/{id}', 'TaskController@edit')->name('edit_task');
Route::get('/delete_task/{id}', 'TaskController@destroy')->name('delete_task');
Route::post('/task_update', 'TaskController@update')->name('task_update');


//
//Route::post('/projects/update',function (){
//    dd('jjjjjj');
//});

