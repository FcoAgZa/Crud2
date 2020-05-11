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
Route::get('/index','Controller@index')->name('index');
Route::get('/registrogrupo', 'Controller@registrogrupo')->name('registrogrupo');
Route::post('/registrogrupo', 'Controller@registrogrupo_datos')->name('registrogrupo_datos');
Route::get('/registroalumno', 'Controller@registroalumno')->name('registroalumno');
Route::post('registroalumno', 'Controller@registroalumno_datos')->name('registroalumno_datos');
Route::get('/editaalumno/{id_alumno}', 'AlumnosController@editaalumno')->name('editaalumno');
Route::post('/editaalumno', 'AlumnosController@update')->name('editaalumno_d');
Route::get('/borrar/{id_alumno}','AlumnosController@borrar')->name('borrar');