<?php

use App\Http\Controllers\ProfileController;
use App\Models\Penjual;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterPenjual;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\SellerprofileController;

Route::get('/', function () {
    return view('index');
});

// STATUS ORDER
Route::controller(OrderController::class)->group(function () {
    Route::get('buyerstatus/{id}','buyerstatus')->name('view');
    Route::post('buyerstatus/{id}','buyerstatus');

    
    Route::get('listriwayatpesanan','vieworder')->name('listriwayatpesanan');
    

    Route::get('riwayatpesananbuyer','buyervieworder')->name('buyervieworder');
    Route::get('riwayatpesananseller','sellervieworder')->name('sellervieworder');

    Route::put('riwayatpesananseller/{id}','sellerstatusterima')->name('sellerstatusterima');
    Route::put('riwayatpesanansellertolak/{id}','sellerstatustolak')->name('sellerstatustolak');

    // Route::put('riwayatpesananseller','sellerstatustolak')->name('sellerstatustolak');
});
    

// Route Penjual

// TOKO EDIT PROFILE 
// Route::get('/tokoedit',[SellerprofileController::class, 'index']);
// Route::post('/penjual/tokoedit', [SellerprofileController::class, 'edit']);

Route::get('riwayatpesanan',function(){
    return view('table-riwayat-pesanan');
});





// BUYER PRODUK
Route::controller(produkController::class)->group(function () {
    Route::get('editproduk','vieweditproduk')->name('vieweditproduk');
    Route::get('tambahproduk','viewtambahproduk')->name('viewtambahproduk');
    Route::post('tambahproduk', 'tambahproduk')->name('tambahproduk');

    Route::get('editproduk/{id}','editproduk')->name('editproduk');
    Route::put('editproduk/{id}','editproduks');

    Route::get('deleteproduk/{id}','deleteproduk')->name('deleteproduk');
    Route::delete('deleteproduk/{id}','deleteproduk')->name('deleteproduks');
});

// BUYER VIEW PRODUK
Route::controller(produkController::class)->group(function () {
    Route::get('viewproduk','viewproduk')->name('viewproduk');
    Route::get('viewproduk/{id}','viewdetailproduk')->name('viewdetailproduk');

})->middleware([ 'auth','verified', 'role:buyer|admin']);

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
    return view('layout/indexpembeli');
})->middleware([ 'auth','verified', 'role:buyer|admin']);

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