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

Route::get('/home', 'user_Controller\posting\LandingpageController@index')->name('home');
Route::get('/home/detailPosting/{id}', 'user_Controller\posting\LandingpageController@detailPosting')->name('detail_posting');

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
    //kelola contact
    // Route::get('/contact/list', 'admin\AdminController@contact')->name('contact_list');
    Route::get('/category/list', 'admin\AdminController@category')->name('category_list');
    //pengguna
    Route::get('/pengguna/list', 'admin\AdminController@pengguna')->name('pengguna_list');

    //postingan

    //hewan
    Route::get('/posting/hewan/list', 'admin\AdminController@posting_hewan')->name('posting_hewan_list');
    Route::get('/posting/hewan/detail/{id}', 'admin\AdminController@posting_hewan_detail')->name('posting_hewan_detail');

    //blog
    Route::get('/posting/blog/list', 'admin\AdminController@posting_blog')->name('posting_blog_list');
    Route::get('/posting/blog/detail/{id}', 'admin\AdminController@posting_blog_detail')->name('posting_blog_detail');

    //clinic
    Route::get('/posting/clinic/list', 'admin\AdminController@posting_clinic')->name('posting_clinic_list');
    Route::get('/posting/clinic/detail/{id}', 'admin\AdminController@posting_clinic_detail')->name('posting_clinic_detail');

});

Route::middleware('auth:user')->group(function () {
    // HALAMAN YG HARUS LOGIN USER
    Route::get('/account', 'user_Controller\account\AccountController@index')->name('account');

    //route untuk di my profile
    Route::get('/alreadyadopt', 'user_Controller\account\AlreadyadoptController@index')->name('alreadyadopt');
    Route::get('/alreadyadopt/detail/{id}', 'user_Controller\account\AlreadyadoptController@detail')->name('detail_alreadyadopt');
    Route::get('/infouser', 'user_Controller\account\AlreadyadoptController@info')->name('info_user');
    Route::get('/detailpengadopsi', 'user_Controller\account\AlreadyadoptController@detail_pengadopsi')->name('detailpengadopsi');

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