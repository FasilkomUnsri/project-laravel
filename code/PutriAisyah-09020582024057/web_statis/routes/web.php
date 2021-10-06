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
    return view('home');
});

Route::get('/', function () {
    return view('webputriaisyah');
});

Route::get('/tentang', function () {
    return view('tentang_saya');
});

Route::get('/kontak', function () {
    return view('kontak_saya');
});

Route::get('/cerpen', function(){
    return view('cerpen');
});