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
    Route::post('/adopt', 'user_Controller\posting\adoptController@adopt')->name('adopt');
    Route::post('/unadopt', 'user_Controller\posting\adoptController@unadopt')->name('unadopt');
});

Route::middleware('auth:user')->group(function () {
    Route::post('/accept/adopt', 'user_Controller\posting\adoptController@userAcceptAdoption')->name('accept.adoption');
});

// Route::middleware('auth:admin')->group(function () {
    Route::post('user/change/password', 'user_Controller\account\AccountController@changePassword')->name('change.password');
// });
