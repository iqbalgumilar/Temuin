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

/* ADMIN */

Route::get('/auth', 'Admin\Auth@auth');
Route::post('/login', 'Admin\Auth@login');
Route::get('/logout', 'Admin\Auth@logout');

Route::get('/admin', 'Admin\Auth@index');

Route::get('/admin/skills/data', 'Admin\Skills@data');
Route::resource('admin/skills', 'Admin\Skills');

Route::get('/admin/works/data', 'Admin\Works@data');
Route::resource('admin/works', 'Admin\Works');

Route::get('/admin/services/data', 'Admin\Services@data');
Route::resource('admin/services', 'Admin\Services');

Route::get('/admin/admin/data', 'Admin\AdminController@data');
Route::resource('admin/admin', 'Admin\AdminController');

Route::resource('user/user','User\UserController');
Route::resource('user/profile','User\Profiles');
Route::resource('user/id','User\CardId');