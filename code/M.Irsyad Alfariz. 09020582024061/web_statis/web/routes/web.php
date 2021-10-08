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
Route::get('/about', function () {
    return view('about_us');
});
Route::get('/link', function () {
    return view('linkvideo');
});
Route::get('/film', function () {
    return view('film');
});
Route::get('/drama', function () {
    return view('drama');
});
Route::get('/anime', function () {
    return view('anime');
});


Route::get('/reg', function () {
    return view('register');
});
