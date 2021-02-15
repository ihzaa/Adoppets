<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//untuk blog, tampilan awal blog
Route::get('/blog/{$id}', 'user_Controller\blog\BlogController@detail');
//detail blog ketika diklik "read more"
Route::get('/blog', 'user_Controller\blog\BlogController@index')->name('blog');
//kontak
Route::get('/contact', 'user_Controller\contact\ContactController@index')->name('contact');
//informasi klinik
Route::get('/clinic', 'user_Controller\clinicinfo\ClinicController@index')->name('clinic');

Route::middleware('auth:admin')->group(function () {
    // HALAMAN YG HARUS LOGIN ADMIN
});

Route::middleware('auth:user')->group(function () {
    // HALAMAN YG HARUS LOGIN USER
    Route::get('/account', 'user_Controller\account\AccountController@index')->name('account');
    Route::get('/mypostingan', 'user_Controller\account\MypostinganController@index')->name('mypostingan');
    Route::get('/alreadyadopt', 'user_Controller\account\AlreadyadoptController@index')->name('alreadyadopt');

});

Route::middleware('guest')->group(function () {
    // HALAMAN YG DIBUKA HARUS DALAM KEADAAAN BELUM ADA YG LOGIN

});