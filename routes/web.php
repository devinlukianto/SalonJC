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

use Illuminate\Support\Facades\Input;

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


//ROUTE UNTUK DETAIL PRODUK
Route::get('produk/{id}', 'PageController@fetchproduct')->name('produk');

//ROUTE UNTUK REGISTER
Route::post('/register', function()
{
    $user = new \App\Models\User;
    $user->id    = Input::get('id');
    $user->email    = Input::get('email');
    $user->password = Input::get('password');
    $user->save();

    return Redirect::to("home");
})->name('registerproceed');