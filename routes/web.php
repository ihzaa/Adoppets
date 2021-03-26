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


Route::get('/', 'user_Controller\posting\LandingpageController@index')->name('landingpage');
Route::get('/user/verify/{token}', 'user_Controller\auth\verifyAccountController@verifyUser')->name('verify.user');

Route::middleware('checkfetch')->group(function () {
    Route::post('/unadopt', 'user_Controller\posting\adoptController@unadopt')->name('unadopt');
    Route::post('/like/posting', 'user_Controller\posting\PostingController@likePosting')->name('likePosting');
    Route::post('/dislike/posting', 'user_Controller\posting\PostingController@dislikePosting')->name('dislikePosting');
});

Route::middleware('auth:user')->group(function () {
    Route::post('/accept/adopt', 'user_Controller\posting\adoptController@userAcceptAdoption')->name('accept.adoption');
    Route::post('user/change/password', 'user_Controller\account\AccountController@changePassword')->name('change.password');
    Route::post('/adopt/{id}', 'user_Controller\posting\adoptController@adopt')->name('adopt');
    Route::post('/report/posting/{id}', 'user_Controller\posting\PostingController@reportPosting')->name('posting.report');
    Route::post('/report/blog/{id}', 'user_Controller\blog\BlogController@reportBlog')->name('blog.report');
    Route::post('/report/clinic/{id}', 'user_Controller\clinicinfo\ClinicController@reportClinic')->name('clinic.report');
});

Route::middleware('auth:admin')->group(function () {
    // posting
    Route::get('/posting/report/delete/{id}', 'admin\ReportPostingController@deleteReport')->name('admin.delete.report.posting');
    Route::post('/posting/report/BLOCK/{id}', 'admin\ReportPostingController@block')->name('admin.block.report.posting');

    // blog
    Route::get('/blog/report/delete/{id}', 'admin\ReportBlogController@deleteReport')->name('admin.delete.report.blog');
    Route::post('/blog/report/BLOCK/{id}', 'admin\ReportBlogController@block')->name('admin.block.report.blog');

    // clinic
    Route::get('/clinic/report/delete/{id}', 'admin\ReportClinicController@deleteReport')->name('admin.delete.report.clinic');
    Route::post('/clinic/report/BLOCK/{id}', 'admin\ReportClinicController@block')->name('admin.block.report.clinic');

    // category
    Route::post('add/category', 'admin\AdminController@add_category')->name('admin.add.category');

    Route::get('admin/change/password', 'admin\PasswordController@get')->name('admin.change.password.get');
    Route::post('admin/change/password', 'admin\PasswordController@post')->name('admin.change.password.post');
});
