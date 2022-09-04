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

Route::middleware(['auth'])->group(function () {
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

// Genre

/* input genre */
/* link form add */
Route::get('genre/create', 'GenreController@create');
/* link input database */
Route::post('/add_action', 'GenreController@action');

/* link read data */
Route::get('/genre', 'GenreController@index');
/* link detail */
Route::get('/genre/{genre_id}', 'GenreController@show');
/* link edit */
Route::get('/genre/{genre_id}/edit', 'GenreController@edit');
/* link update */
Route::put('/genre/{genre_id}', 'GenreController@update');
/* link delete */
Route::delete('/genre/{genre_id}', 'GenreController@destroy');

// Film

/* input film */
/* link form add */
Route::get('film/create', 'FilmController@create');
/* link input database */
Route::post('/add_action', 'FilmController@action');

/* link read data */
Route::get('/film', 'FilmController@index');
/* link detail */
Route::get('/film/{film_id}', 'FilmController@show');
/* link edit */
Route::get('/film/{film_id}/edit', 'FilmController@edit');
/* link update */
Route::put('/film/{film_id}', 'FilmController@update');
/* link delete */
Route::delete('/film/{film_id}', 'FilmController@destroy');

});


// Crud Cast

Route::resource('cast','CastController');


Auth::routes();
