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

Route::get('/home', 'PostController@index')->name('index');
Route::get('/post/create','PostController@create')->name('admin.post.create');
Route::post('/post/create','PostController@store')->name('admin.post.store');
Route::get('/post/{id}/edit','PostController@edit')->name('admin.post.edit');
Route::patch('/post/{id}/edit','PostController@update')->name('admin.post.update');
Route::delete('/post/{id}/delete','PostController@destroy')->name('admin.post.delete');
Route::get('/post/{id}','PostController@show')->name('admin.post.show');
Route::post('/post/{id}','PostCommentController@store')->name('admin.post.comment');
Route::get('/user/profile/edit','UserProfileController@edit')->name('admin.profile.edit');
Route::post('/user/profile/edit','UserProfileController@update')->name('admin.profile.update');
Route::get('/user/profile','UserProfileController@show')->name('admin.profile.show');
