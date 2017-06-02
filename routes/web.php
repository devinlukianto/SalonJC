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

Route::get('/', function () {
    return view('welcome');
});


//ROUTE UNTUK MENUBAR
Route::get('home', function () {
    return view('home');
})->name('homeroute');

Route::get('catalogue', function () {
    return view('home');
})->name('catalogue');

Route::get('aboutus', function () {
    return view('home');
})->name('aboutus');

Route::get('contact', function () {
    return view('home');
})->name('contact');

Route::get('signinpage', function () {
    return view('home');
})->name('signinpage');

Route::get('register', function () {
    return view('register');
})->name('registerpage');

Route::get('coba', function () {
    return view('coba');
})->name('coba');


//ROUTE UNTUK DETAIL PRODUK
Route::get('produk/{id}', 'PageController@fetchproduct')->name('produk');

//ROUTE UNTUK REGISTER
Route::post('/register', 'RegisterController@add')->name('registerproceed');