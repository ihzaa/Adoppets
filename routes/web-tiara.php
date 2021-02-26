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
//detail blog ketika diklik "read more"
Route::get('/blog', 'user_Controller\blog\BlogController@index')->name('blog');
Route::get('/detailblog', 'user_Controller\blog\BlogController@index_detail')->name('blog_detail');

//kontak
Route::get('/contact', 'user_Controller\contact\ContactController@index')->name('contact');

//informasi klinik
Route::get('/clinic', 'user_Controller\clinicinfo\ClinicController@index')->name('clinic');
Route::get('/detailclinic', 'user_Controller\clinicinfo\ClinicController@index_detail')->name('clinic_detail');

Route::middleware('auth:admin')->group(function () {
    // HALAMAN YG HARUS LOGIN ADMIN
});

Route::middleware('auth:user')->group(function () {
    // HALAMAN YG HARUS LOGIN USER
    Route::get('/account', 'user_Controller\account\AccountController@index')->name('account');

    //route untuk di my profile
    Route::get('/alreadyadopt', 'user_Controller\account\AlreadyadoptController@index')->name('alreadyadopt');

    //untuk posting hewan
    Route::get('/submitposting', 'user_Controller\posting\PostingController@index_posting')->name('submit_posting');
    Route::post('/postposting', 'user_Controller\posting\PostingController@store_posting')->name('post_posting');

    //untuk posting blog
    Route::get('/submitblog', 'user_Controller\blog\BlogController@index_blog')->name('submit_blog');
    Route::post('/postblog', 'user_Controller\blog\BlogController@store_blog')->name('post_blog');
    Route::get('/postinganBlog', 'user_Controller\blog\BlogController@list_blog')->name('posting_blog');

    //untuk posting klinik
    Route::get('/submitclinic', 'user_Controller\clinicinfo\ClinicController@index_clinic')->name('submit_clinic');
    Route::post('/postclinic', 'user_Controller\clinicinfo\ClinicController@store_clinic')->name('post_clinic');
    Route::get('/postinganClinic', 'user_Controller\clinicinfo\ClinicController@list_clinic')->name('posting_clinic');

    // Kontak
    Route::post('/contact', 'user_Controller\contact\ContactController@store')->name('post_contact');
});

Route::middleware('guest')->group(function () {
    // HALAMAN YG DIBUKA HARUS DALAM KEADAAAN BELUM ADA YG LOGIN

});