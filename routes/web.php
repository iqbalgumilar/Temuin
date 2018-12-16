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

/* Company */
Route::get('/', function () {
    return view('company.index');
})->name('index');


/* Personal Blog */

/* Curriculum Vitae */

/* Kartu */

/* ADMIN */

Route::get('/admin/auth', 'Admin\Auth@auth');
Route::post('/admin/login', 'Admin\Auth@login');
Route::get('/admin/logout', 'Admin\Auth@logout');

Route::get('/admin', 'Admin\Auth@index');

Route::get('/admin/skills/data', 'Admin\Skills@data');
Route::resource('admin/skills', 'Admin\Skills');

Route::get('/admin/works/data', 'Admin\Works@data');
Route::resource('admin/works', 'Admin\Works');

Route::get('/admin/services/data', 'Admin\Services@data');
Route::resource('admin/services', 'Admin\Services');

Route::get('/admin/JenisProduk/data', 'Admin\JenisProduk@data');
Route::resource('admin/JenisProduk', 'Admin\JenisProduk');

Route::get('/admin/admin/data', 'Admin\AdminController@data');
Route::resource('admin/admin', 'Admin\AdminController');

/* USER */

Route::get('/user/auth', 'User\Auth@auth');
Route::get('/user/register', 'User\Auth@register');
Route::get('/user/logout', 'User\Auth@logout');
Route::get('/user/emailverifikasi', 'User\Auth@emailVerifikasi');
Route::get('/user/verifikasi/{id}', 'User\Auth@verifikasi');
Route::post('/user/sendEmail', 'User\Auth@sendEmail');
Route::post('/user/actLogin', 'User\Auth@login');
Route::post('/user/actRegister', 'User\Auth@actRegister');

Route::get('/user', 'User\Auth@index');

Route::resource('user/user','User\UserController');

Route::resource('user/profile','User\Profiles');

Route::resource('user/id','User\CardId');

Route::resource('user/cv/about','User\UserAbout');

Route::resource('user/cv/awards','User\UserAwards');

Route::resource('user/cv/education','User\UserEducation');

Route::resource('user/cv/experience','User\UserExperience');

Route::resource('user/cv/skill','User\UserSkills');

Route::resource('user/portfolio','User\UserPortfolio');
