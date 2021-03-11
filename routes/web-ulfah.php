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

// halaman register
// Route::get('/detailPosting', 'user_Controller\posting\LandingpageController@index_detail')->name('detail_posting');
Route::get('/logout', 'auth\allAuthController@logout')->name('logout');

Route::middleware('auth:admin')->group(function () {
    // HALAMAN YG HARUS LOGIN ADMIN
    Route::get('/home_admin', 'admin\AdminController@index')->name('home_admin');
    // Route::get('/list_blog', 'admin\AdminController@list')->name('list_blog');

    // dashboard admin
    Route::get('/dashboardAdmin', 'admin\AdminController@dashboard')->name('dashboard_admin');

    // REPORT

    // Report Hewan
    Route::get('/report/hewan/list', 'admin\AdminController@report_Hewan')->name('report_hewan_list');
    Route::get('/report/hewan/detail/{id}', 'admin\AdminController@report_hewan_detail')->name('report_hewan_detail');
    Route::delete('/report/hewan/delete/{id}', 'admin\AdminController@report_hewan_delete')->name('report_hewan_delete');

    // Report Blog
    Route::get('/report/blog/list', 'admin\AdminController@report_blog')->name('report_blog_list');
    Route::get('/report/blog/detail/{id}', 'admin\AdminController@report_blog_detail')->name('report_blog_detail');
    Route::delete('/report/blog/delete/{id}', 'admin\AdminController@report_blog_delete')->name('report_blog_delete');

    // Report Klinik
    Route::get('/report/klinik/list', 'admin\AdminController@report_klinik')->name('report_klinik_list');
    Route::get('/report/klinik/detail/{id}', 'admin\AdminController@report_klinik_detail')->name('report_klinik_detail');
    Route::delete('/report/klinik/delete/{id}', 'admin\AdminController@report_klinik_delete')->name('report_klinik_delete');

    // contact
    Route::get('/contact/list', 'admin\AdminController@contact_list')->name('contact_list');
    Route::get('/contact/detail/{id}', 'admin\AdminController@contact_detail')->name('contact_detail');
});

Route::middleware('auth:user')->group(function () {
    // HALAMAN YG HARUS LOGIN USER
    // posting hewan
    Route::get('/submit', 'user_Controller\posting\PostingController@index')->name('get_submit_postingan');
    Route::get('/PostinganHewan', 'user_Controller\posting\PostingController@edit_posting')->name('edit_posting');

    // ACCOUNT
    Route::post('/posteditaccount', 'user_Controller\account\AccountController@update')->name('post_update_account');

    // Pengelolaan BLOG
    Route::get('/blog/detail/{id}', 'user_Controller\blog\BlogController@detail')->name('detail_blog');
    Route::get('/blog/update/{id}', 'user_Controller\blog\BlogController@edit')->name('update_blog');
    Route::post('/blog/update/post/{id}', 'user_Controller\blog\BlogController@update')->name('stote_update_blog');
    Route::delete('/blog/delete/{id}', 'user_Controller\blog\BlogController@destroy')->name('delete_blog');

    // posting
    Route::get('/posting/detail/{id}', 'user_Controller\posting\PostingController@detail_hewan')->name('detail_posting_hewan');
    Route::get('/posting/update/{id}', 'user_Controller\posting\PostingController@edit')->name('update_posting_hewan');
    Route::post('/posting/update/post/{id}', 'user_Controller\posting\PostingController@update')->name('store_update_posting_hewan');
    Route::delete('/posting/delete/{id}', 'user_Controller\posting\PostingController@delete')->name('delete_posting_hewan');
});

Route::middleware('checkfetch')->group(function () {
    Route::post('like', 'user_Controller\posting\PostingController@like')->name('likePostingan');
});

Route::middleware('guest')->group(function () {
    // HALAMAN YG DIBUKA HARUS DALAM KEADAAAN BELUM ADA YG LOGIN
    Route::get('/login', 'user_Controller\auth\LoginController@index')->name('get_login');
    Route::post('/login', 'auth\allAuthController@login')->name('post_login');

    Route::post('/postregister', 'user_Controller\auth\RegisterController@store')->name('post_register');
    Route::get('/register', 'user_Controller\auth\RegisterController@index')->name('register');
});