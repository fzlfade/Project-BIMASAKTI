<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile-toko', function () {
    return view('profile-toko');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/daftar-produk', function () {
    return view('daftar-produk');
});

Route::get('/menu-detail', function () {
    return view('menu-detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/editmenu', function () {
    return view('editmenu');
});

Route::get('/daftar-toko', function () {
    return view('daftar-toko');
});