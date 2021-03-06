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

//blog
Route::get('/blog', 'user_Controller\blog\BlogController@index')->name('blog');
Route::get('/blog/readMore/{id}', 'user_Controller\blog\BlogController@readMore')->name('readmore_blog');

//kontak
Route::get('/contact', 'user_Controller\contact\ContactController@index')->name('contact');

//informasi klinik
Route::get('/clinic', 'user_Controller\clinicinfo\ClinicController@index')->name('clinic');
Route::get('/clinic/readMore/{id}', 'user_Controller\clinicinfo\ClinicController@readMore')->name('readmore_clinic');

Route::middleware('auth:admin')->group(function () {
    // HALAMAN YG HARUS LOGIN ADMIN
});

Route::middleware('auth:user')->group(function () {
    // HALAMAN YG HARUS LOGIN USER
    Route::get('/account', 'user_Controller\account\AccountController@index')->name('account');

    //route untuk di my profile
    Route::get('/alreadyadopt', 'user_Controller\account\AlreadyadoptController@index')->name('alreadyadopt');
    Route::get('/alreadyadopt/detail/{id}', 'user_Controller\account\AlreadyadoptController@detail')->name('detail_alreadyadopt');
    Route::get('/infouser', 'user_Controller\account\AlreadyadoptController@info')->name('info_user');

    //untuk posting hewan
    Route::get('/submitposting', 'user_Controller\posting\PostingController@index_posting')->name('submit_posting');
    Route::post('/postposting', 'user_Controller\posting\PostingController@store_posting')->name('post_posting');
    // Route::get('/detailPostingSaya', 'user_Controller\posting\PostingController@detail')->name('detail_posting_saya');

    //untuk posting blog
    Route::get('/submitblog', 'user_Controller\blog\BlogController@index_blog')->name('submit_blog');
    Route::post('/postblog', 'user_Controller\blog\BlogController@store_blog')->name('post_blog');
    Route::get('/postinganBlog', 'user_Controller\blog\BlogController@list_blog')->name('posting_blog');

    //untuk posting klinik
    Route::get('/submitclinic', 'user_Controller\clinicinfo\ClinicController@index_clinic')->name('submit_clinic');
    Route::post('/postclinic', 'user_Controller\clinicinfo\ClinicController@store_clinic')->name('post_clinic');
    Route::get('/postinganClinic', 'user_Controller\clinicinfo\ClinicController@list_clinic')->name('posting_clinic');

    // Route::get('/clinic/detail/{id}', 'user_Controller\clinicinfo\ClinicController@detail')->name('detail_clinic');
    Route::get('/clinic/detail/{id}', 'user_Controller\clinicinfo\ClinicController@detail')->name('detail_clinic');
    Route::get('/clinic/update/{id}', 'user_Controller\clinicinfo\ClinicController@edit')->name('update_clinic');
    Route::post('/clinic/update/post/{id}', 'user_Controller\clinicinfo\ClinicController@update')->name('store_update_clinic');
    Route::delete('/clinic/delete/{id}', 'user_Controller\clinicinfo\ClinicController@destroy')->name('delete_clinic');
    // Kontak
    Route::post('/contact', 'user_Controller\contact\ContactController@store')->name('post_contact');
});

Route::middleware('guest')->group(function () {
    // HALAMAN YG DIBUKA HARUS DALAM KEADAAAN BELUM ADA YG LOGIN

});