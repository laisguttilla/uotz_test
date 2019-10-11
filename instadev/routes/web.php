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

Auth::routes();

Route::middleware(['auth'])->group(function(){

    // rotinas pagina index
    Route::get('/index', 'PostsController@posts');

    // crud posts
    Route::get('/add_post', 'PostsController@adicionandoPost');
    Route::post('/add_post', 'PostsController@salvandoPost');
    Route::put('/edit_post/{id}', 'PostsController@alterarPost')->name('editpost');
    Route::delete('/edit_post/{id}', 'PostsController@deletarPost');

    //crud usuario
    Route::get('/profile/{id}', 'UserController@profile');
    Route::put('/profile/{id}', 'UserController@alterarUsuario');
    Route::delete('/index', 'UserController@deletarUsuario')->name('delete');

});
