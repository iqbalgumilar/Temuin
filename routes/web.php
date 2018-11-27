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

Route::get('/auth', 'Auth@auth');
Route::post('/login', 'Auth@login');
Route::get('/logout', 'Auth@logout');

Route::get('/admin', 'Auth@index');

Route::get('/admin/skills/data', 'Skills@data');
Route::resource('admin/skills', 'Skills');

Route::get('/admin/works/data', 'Works@data');
Route::resource('admin/works', 'Works');