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

Route::namespace('API')->name('api.')->group(function(){

    Route::get('/index', 'PostController@index');
    Route::post('/create', 'PostController@create');
    Route::get('/show/{id}', 'PostController@show');
    Route::put('/update/{id}', 'PostController@update');
    Route::delete('/delete/{id}', 'PostController@delete');
});
