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

Route::get('/todo', 'Todo@index')->name('todoIndex');
Route::get('/todo/finish', 'Todo@finish_index')->name("TodoFinish");
Route::get('/todo/new', 'Todo@new_form')->name('TodoNewForm');
Route::post('/todo', 'Todo@save')->name('TodoCreate');
Route::get('/todo/{id}', 'Todo@detail')->name('TodoDetail'); 
Route::get('/todo/delete/{id}', 'Todo@delete')->name('TodoDelete'); 
Route::get('/todo/edit/{id}', 'Todo@edit')->name('TodoEditForm'); 
Route::post('/todo/edit/{id}', 'Todo@update')->name('TodoUpdate'); 
