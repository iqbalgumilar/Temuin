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
    return view('company.contents.main');
})->name('main');
Route::get('/about', function () {
    return view('company.contents.about');
})->name('about');
Route::get('/features', function () {
    return view('company.contents.features');
})->name('features');
Route::get('/team', function () {
    return view('company.contents.team');
})->name('team');
Route::get('/contact', function () {
    return view('company.contents.contact');
})->name('contact');


/* Personal Blog */
Route::get('/preview/pb/default', function () {
    return view('1-pb.1-default.preview');
})->name('pb.default');

/* Curriculum Vitae */


/* Kartu Nama */


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

Route::get('/admin/Produk/data', 'Admin\Produk@data');
Route::resource('admin/Produk', 'Admin\Produk');

Route::get('/admin/JenisProduk/data', 'Admin\JenisProduk@data');
Route::resource('admin/JenisProduk', 'Admin\JenisProduk');

Route::get('/admin/admin/data', 'Admin\AdminController@data');
Route::resource('admin/admin', 'Admin\AdminController');

Route::get('/admin/transaksi/data', 'Admin\TransaksiController@data');
Route::resource('admin/transaksi', 'Admin\TransaksiController');

/* USER */

Route::get('/user/auth', 'User\Auth@auth');
Route::get('/user/register', 'User\Auth@register');
Route::get('/user/logout', 'User\Auth@logout');
Route::get('/user/emailverifikasi', 'User\Auth@emailVerifikasi');
Route::get('/user/verifikasi/{id}', 'User\Auth@verifikasi');
Route::post('/user/sendEmail', 'User\Auth@sendEmail');
Route::post('/user/actLogin', 'User\Auth@actLogin');
Route::post('/user/actRegister', 'User\Auth@actRegister');

Route::get('/user', 'User\Auth@index');

Route::resource('user/user','User\UserController');

Route::resource('/user/profile','User\Profiles');

Route::resource('user/awards','User\UserAwards');

Route::resource('user/education','User\UserEducation');

Route::resource('user/experience','User\UserExperience');

Route::resource('user/skill','User\UserSkills');

Route::resource('user/portfolio','User\UserPortfolio');
