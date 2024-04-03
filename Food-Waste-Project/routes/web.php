<?php

use App\Http\Controllers\ProfileController;
use App\Models\Penjual;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterPenjual;
use App\Http\Controllers\produkController;
use App\Http\Controllers\SellerprofileController;

Route::get('/', function () {
    return view('index');
});

// Route Penjual

// TOKO EDIT PROFILE 
// Route::get('/tokoedit',[SellerprofileController::class, 'index']);
// Route::post('/penjual/tokoedit', [SellerprofileController::class, 'edit']);

Route::controller(produkController::class)->group(function () {
    Route::get('editproduk','vieweditproduk')->name('vieweditproduk');
    Route::get('tambahproduk','viewtambahproduk')->name('viewtambahproduk');
    Route::post('tambahproduk', 'tambahproduk')->name('tambahproduk');
    Route::get('editproduk/{id}','editproduk')->name('editproduk');
    Route::put('editproduk/{id}','editproduks')->name('editproduks');
});



Route::controller(PenjualController::class)->group(function () {
    Route::get('profiltoko', 'profiltoko')->name('penjual.profil');
    Route::get('tokoedit', 'tokoedit')->name('Penjual.tokoedit');
    Route::put('tokoedit', 'editprofile')->name('editprofile');
})->middleware([ 'auth', 'role:seller|admin']);

Route::get('editmenu', function () {
    return view('/Penjual/editmenu');
})->middleware([ 'auth','verified', 'role:seller|admin']);


Route::get('upload-menu', function () {
    return view('/Penjual/upload-menu');
})->middleware([ 'auth','verified', 'role:seller|admin']);



// END


// TOKO EDIT PRODUK

Route::get('daftar-produk', function () {
    return view('Penjual/daftar-produk');
})->middleware([ 'auth','verified', 'role:seller|admin']);

// Route::controller(ProductController::class)->group(function() {
//    Route::get('','')->name('product-edit'); 
// });

// END
Route::get('editmenu', function () {
    return view('/Penjual/editmenu');
})->middleware([ 'auth','verified', 'role:seller|admin']);


Route::get('upload-menu', function () {
    return view('/Penjual/upload-menu');
})->middleware([ 'auth','verified', 'role:seller|admin']);


// Route END Penjual

Route::get('loginpage', function () {
    return view('loginpage');
});

Route::controller(RegisterPenjual::class)->group(function(){
    Route::get('registerseller','create')->name('registersellerview');
    Route::post('registerseller','store')->name('registerseller');
});


Route::get('registerseller', function () {
    return view('auth/registerseller');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Penjual


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


Route::middleware('auth', )->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';
