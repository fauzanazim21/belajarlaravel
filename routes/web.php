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

Route::get('/','IndexController@home');
Route::get('/register','AuthController@register');
Route::get('/welcome','AuthController@welcome');
Route::get('/datatable','IndexController@datatable');

/* input cast */
/* link form add */
Route::get('cast/create', 'CastController@create');
/* link input database */
Route::post('/add_action', 'CastController@action');

/* link read data */
Route::get('/cast', 'CastController@index');
/* link detail */
Route::get('/cast/{cast_id}', 'CastController@show');
/* link edit */
Route::get('/cast/{cast_id}/edit', 'CastController@edit');
/* link update */
Route::put('/cast/{cast_id}', 'CastController@update');
/* link delete */
Route::delete('/cast/{cast_id}', 'CastController@destroy');

