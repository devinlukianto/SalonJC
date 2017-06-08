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
Route::delete('products/{id}/delete', ['as'=>'product.trash.delete', 'uses'=>'ProductController@deletepermanent']);
Route::get('products/{id}/restore', ['as'=>'product.trash.restore', 'uses'=>'ProductController@restore']);
Route::get('products/{id}/showtrash', ['as'=>'product.trash.show','uses'=>'ProductController@showtrash']);
Route::get('products/trash', ['as'=>'product.trash','uses'=>'ProductController@trash']);
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

//ROUTE CRUD NEWS DAN COMMENT
Route::get('news/trash', 'NewsController@getTrash')->name('newstrashindex');
Route::get('news/{id}/restore', 'NewsController@restoreTrash')->name('newsrestore');
Route::get('news/{id}/remove', 'NewsController@removeTrash')->name('newsremove');
Route::resource('news', 'NewsController');
Route::resource('comment', 'CommentController');

//ROUTE ADMIN
Route::get('admin/home', function () {
    return view('admin.index');
})->name('adminhome');

//ROUTE UNTUK KATEGORI
Route::resource('categories','CategoryController');