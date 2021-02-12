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
Route::get('/register', 'user_Controller\auth\RegisterController@index')->name('register');
Route::get('/login', 'user_Controller\auth\LoginController@index')->name('login');