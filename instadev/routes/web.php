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

Route::redirect('/', '/login');
Route::redirect('/logout', '/login');

Auth::routes();

Route::middleware(['auth'])->group(function(){

    // rotinas pagina index
    Route::get('/index', 'PostsController@posts');

    // crud posts
    Route::get('/add_post', 'PostsController@addPost');
    Route::post('/add_post', 'PostsController@savePost');
    Route::get('edit_post/{id}', 'PostsController@showPost')->name('showpost');
    Route::put('/edit_post/{id}', 'PostsController@updatePost')->name('editpost');
    Route::delete('/edit_post/{id}', 'PostsController@deletePost')->name('remove');

    //crud usuario
    Route::get('/profile/{id}', 'UserController@profile');
    Route::put('/profile/{id}', 'UserController@updateUser')->name('editprofile');
    Route::delete('/index', 'UserController@deleteUser')->name('delete');

});
