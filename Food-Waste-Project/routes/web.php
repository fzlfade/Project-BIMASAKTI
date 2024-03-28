<?php

use App\Http\Controllers\ProfileController;
use App\Models\Penjual;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualController;

Route::get('/', function () {
    return view('index');
});
Route::get('tokoedit', function () {
    return view('Penjual/tokoedit');
});

Route::controller(PenjualController::class)->group(function () {
    Route::get('Penjual/tokoedit', 'Penjual/tokoedit')->name('Penjual/tokoedit');
    Route::post('Penjual/tokoedit', 'tokoedit')->name('tokoedit.save');

});

Route::get('loginpage', function () {
    return view('loginpage');
});

Route::get('registerpage', function () {
    return view('registerpage');
});

Route::get('registerseller', function () {
    return view('auth/registerseller');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Penjual
Route::get('editmenu', function () {
    return view('/Penjual/editmenu');
})->middleware([ 'auth','verified', 'role:seller|admin']);






Route::get('upload-menu', function () {
    return view('/Penjual/upload-menu');
})->middleware([ 'auth','verified', 'role:seller|admin']);

// Pembeli
Route::get('daftar-toko',function () {
    return view ('/Pembeli/daftar-toko');
})->middleware([ 'auth','verified', 'role:buyer|admin']);

Route::get('menu-detail',function () {
    return view ('/Pembeli/menu-detail');
})->middleware([ 'auth','verified', 'role:buyer|admin']);

Route::get('cart',function () {
    return view ('/Pembeli/cart');
})->middleware([ 'auth','verified', 'role:buyer|admin']);

Route::get('profilepage',function () {
    return view ('/Pembeli/profilepage');
})->middleware([ 'auth','verified', 'role:buyer|admin']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
