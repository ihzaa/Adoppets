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
Route::get('/detailPosting', 'user_Controller\posting\LandingpageController@index_detail')->name('detail_posting');
Route::get('/logout', 'auth\allAuthController@logout')->name('logout');


Route::middleware('auth:admin')->group(function () {
    // HALAMAN YG HARUS LOGIN ADMIN
    Route::get('/home_admin', 'admin\AdminController@index')->name('home_admin');
    Route::get('/list_blog', 'admin\AdminController@list')->name('list_blog');
});

Route::middleware('auth:user')->group(function () {
    // HALAMAN YG HARUS LOGIN USER
    // posting hewan
    Route::get('/submit', 'user_Controller\posting\PostingController@index')->name('get_submit_postingan');
    Route::get('/editPosting', 'user_Controller\posting\PostingController@edit_posting')->name('edit_posting');


    // ACCOUNT
    Route::post('/posteditaccount', 'user_Controller\account\AccountController@update')->name('post_update_account');

    // BLOG
    Route::get('/blog/detail/{id}', 'user_Controller\blog\BlogController@detail')->name('detail_blog');
    Route::get('/blog/update/{id}', 'user_Controller\blog\BlogController@edit')->name('update_blog');
    Route::post('/blog/update/post/{id}', 'user_Controller\blog\BlogController@update')->name('stote_update_blog');
    Route::delete('/blog/delete/{id}', 'user_Controller\blog\BlogController@destroy')->name('delete_blog');
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