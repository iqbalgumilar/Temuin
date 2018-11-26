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