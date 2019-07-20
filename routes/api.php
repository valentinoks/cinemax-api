<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/movies', 'MovieController@getAllMovies');

Route::post('/movie/create', 'MovieController@createMovie');

Route::get('/comments', 'CommentController@getAllComments');

Route::post('/comment/create', 'CommentController@createComment');

Route::get('/bioskops', 'BioskopController@getAllBioskops');

Route::post('/bioskop/create', 'BioskopController@createBioskop');
