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
    return redirect()->route('homeroute');
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

//ROUTE UNTUK DETAIL PRODUK
Route::get('produk/{id}', 'PageController@fetchproduct')->name('produk');

//ROUTE UNTUK REGISTER

//ROUTE UNTUK PRODUK YANG SUDAH DIHAPUS (SOFT DELETE)
Route::delete('products/{id}/delete', 'ProductController@deletepermanent')->name('productdelete');
Route::get('products/{id}/restore', 'ProductController@restore')->name('productrestore');
Route::get('products/{id}/showtrash', 'ProductController@showtrash')->name('productshowtrash');
Route::get('products/trash', 'ProductController@trash')->name('productindextrash');
//ROUTE UNTUK CRUD PRODUK
Route::resource('products','ProductController');

//ROUTE UNTUk CRUD BRAND
Route::resource('brands','BrandController');

Route::get('register', 'RegisterController@showPage')->name('registerget');
Route::post('register', 'RegisterController@doRegister')->name('registerpost');

//ROUTE UNTUK LOGIN
Route::get('login', 'LoginController@showPage')->name('loginget');
Route::post('login', 'LoginController@doLogin')->name('loginpost');
Route::get('logout', 'LoginController@doLogout')->name('logout');
Route::get('guestlogin', 'LoginController@doGuest')->name('guestget');

Route::resource('news', 'NewsController');
Route::resource('comment', 'CommentController');

//ROUTE UNTUK KATEGORI
Route::resource('categories','CategoryController');
