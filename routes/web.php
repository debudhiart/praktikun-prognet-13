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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user_layouts/user_about');

Route::get('about', function () {
    return view('/user_layouts/user_about');
});

Route::get('kategori', function () {
    return view('/user_layouts/user_kategori');
});

Route::get('user_item', function () {
    return view('/user_layouts/user_item');
});

Route::get('cardpage_1', function () {
    return view('/user_layouts/user_cardpage_1');
});

Route::get('cardpage_2', function () {
    return view('/user_layouts/user_cardpage_2');
});

Route::get('cardpage_3', function () {
    return view('/user_layouts/user_cardpage_3');
});

Route::get('user_profile', function () {
    return view('/user_layouts/user_profile');
});

Route::get('loginuser', function () {
    return view('/login/loginuser');
});

Route::get('sigupnuser', function () {
    return view('/login/sigupnuser');
});

Route::get('forgotpass', function () {
    return view('/login/forgotpass');
});

Route::get('login_master', function () {
    return view('/login/login_master');
});


Route::get('/admin', function () {
    return view('/login/loginadmin');
});

Route::get('admin_master', function () {
    return view('/login/login_master');
});