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

Route::get('/home', function () {
    return view('home');
});


Route::get('/about-us
', function () {
    return view('about-us');
});


Route::get('/akbar
', function () {
    return view('akbar');
});

Route::get('/maulana
', function () {
    return view('maulana');
});