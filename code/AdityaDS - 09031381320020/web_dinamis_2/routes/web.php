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
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['middleware' => ['guest']], function() {
        Route::get('/register', 'AuthController@register')->name('register');
        Route::post('/register', 'AuthController@do_register')->name('register.do_register');

        Route::get('/login', 'AuthController@login')->name('login');
        Route::post('/login', 'AuthController@do_login')->name('login.do_login');
    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/logout', 'AuthController@logout')->name('logout');
    });

    Route::group(['middleware' => ['auth','roleuser:Admin']], function() {
        Route::get('/page/admin', 'PageController@admin')->name('page.admin');
    });
    Route::group(['middleware' => ['auth','roleuser:Admin,Mahasiswa']], function() {
        Route::get('/page/mahasiswa', 'PageController@mahasiswa')->name('page.mahasiswa');
    });
    Route::group(['middleware' => ['auth','roleuser:Admin,Dosen']], function() {
        Route::get('/page/dosen', 'PageController@dosen')->name('page.dosen');
    });
});
