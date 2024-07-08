<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('layout.dashboard');
});

//Route::get('/index', function () {
//    return view('index');
// });

Route::get('/order', function () {
    return view('layout.order');
});

Route::get('/product', function () {
    return view('layout.product');
});

Route::get('/contactus', function () {
    return view('layout.contactus');
});

Route::get('/signin', function () {
    return view('layout.signin');
});

Route::get('/health', function () {
    return view('layout.health');
});

Route::get('/profile', function () {
    return view('layout.profile');
});

Route::get('/company', function () {
    return view('layout.company');
});

Route::get('/adoptionmatch', function () {
    return view('layout.adoptionmatch');
});

Route::get('/new&article', function () {
    return view('layout.new&article');
});

