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
    return view('catalogue');
})->name('catalogue');

Route::get('aboutus', function () {
    return view('about');
})->name('aboutus');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('signinpage', function () {
    return view('signin');
})->name('signinpage');

Route::get('register', function () {
    return view('register');
})->name('registerpage');

//ROUTE UNTUK DETAIL PRODUK
Route::get('produk/{id}', 'PageController@fetchproduct')->name('produk');

//ROUTE UNTUK REGISTER
Route::post('/register', 'RegisterController@add')->name('registerproceed');

//ROUTE UNTUK CRUD PRODUK
Route::resource('products','ProductController');

//ROUTE UNTUK LIST PRODUK //JOVIAN
Route::get('listproduct', [
    'uses' => 'ProductController@index',
    'as' => 'listproduct'
]);

Route::get('editproduct/{id}', [
    'uses' => 'ProductController@edit',
    'as' => 'editproduct'
]);

Route::get('listproduct/{id}', [
    'uses' => 'ProductController@show',
    'as' => 'detaillistproduct'
]);

Route::get('addproduct', [
    'uses' => 'ProductController@create',
    'as' => 'addproduct'
]);

//JOVIAN sampe sini