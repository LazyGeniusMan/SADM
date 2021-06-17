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

Route::get('pembayaran/dashboard', function () {
    if (Auth::check()){
        return view('dashboard');
    } else {
        return view('auth/login');
    }
    
});

Route::get('pembayaran/baru', function () {
    if (Auth::check()){
        return view('baru');
    } else {
        return view('auth/login');
    }
    
});

Route::get('pembayaran/list', function () {
    if (Auth::check()){
        return view('list');
    } else {
        return view('auth/login');
    }
    
});

Route::get('pembayaran/ubah', function () {
    if (Auth::check()){
        return view('ubah');
    } else {
        return view('auth/login');
    }
    
});


Route::get('pembayaran/permintaan-pembayaran', function () {
    if (Auth::check()){
        return view('permintaan-pembayaran');
    } else {
        return view('auth/login');
    }
    
});

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');