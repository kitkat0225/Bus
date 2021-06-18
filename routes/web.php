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

Route::get('/', 'DashboardController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
// Route::post('/register', 'Auth\RegisterController')->name('register');

Auth::routes();

Route::get('/userlist', 'UserController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::middleware('auth')->prefix('admin_manage')->group(function () {
    Route::match(['get', 'post'], '/edit', 'AdminController@edit')->name('admin_manage.edit');
});

Route::resource('posts', 'PostsController');

Route::get('delete', 'UserController@delete')->name('delete');
Route::get('/posts/find/title/{id}', 'FindController@title');
Route::get('/posts/find/created_at/{id}', 'FindController@created_at');
Route::get('/posts/find/user/{id}', 'FindController@user');
Route::get('/posts/find/body/{id}', 'FindController@body');