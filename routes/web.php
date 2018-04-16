<?php

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

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/', function () {
    return 'NO LONGER HACKED, TONPHO IS HANDSOME ;3';
});

Route::get('about', function() {
    return view('about');
});
Route::get('contact', function() {
    return view('contact');
});
Route::get('login', function() {
    return view('login');
});
Route::get('resort', 'MyFirstController@indexResort');
Auth::routes();

Route::get('database-test', function () {
    if (DB::connection()->getDatabaseName())
    {
        echo 'Connected successfully to database ' . DB::connection()->getDatabaseName();
    }
});
Route::get('home', 'HomeController@index')->name('home');
Route::get('admin', 'AdminController@index')->name('admin');