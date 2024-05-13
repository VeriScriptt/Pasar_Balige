<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokuPaymentController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/', function () {
//     return view('layouts.index');
// })->name('home');
// Route::get('index', function () {
//     return view('layouts.index');
// })->name('home');
Route::get('about', function () {
    return view('layouts.about');
})->name('about');
Route::get('contact', function () {
    return view('layouts.contact');
})->name('contact');
Route::get('shop', function () {
    return view('layouts.shop');
})->name('shop');

// Route::get('shop_detail', function () {
//     return view('layouts.shop_detail');
// })->name('shop_detail');

Route::get('toko', function () {
    return view('layouts.toko');
})->name('toko');

Route::get('cart', function () {
    return view('layouts.cart'); // Mengarahkan ke view 'layouts.cart'
})->name('cart'); // Memberikan nama 'cart' pada rute ini

Route::get('checkout', function () {
    return view('layouts.checkout');
})->name('checkout');

Route::get('thankyou', function () {
    return view('layouts.thankyou');
})->name('thankyou');


// Route::get('/produk', [\App\Http\Controllers\ShowController::class,'index']);

Route::get('/', [ShowController::class, 'index'])->name('home');

Route::get('rumah',[SesiController::class,'index']);


Route::get('/shop_detail', [ProdukController::class, 'index'])->name('shop_detail');
Route::post('/toko', [ProdukController::class, 'store'])->name('produk.store');


// Route::middleware(['guest'])->group(function) {

// }


// route admin dan penjual
// Route::get('/penjual', [AdminController::class, 'penjual'])->name('penjual.dashboard');

// Route::get('/penjual/produk', function () {
//     return view('penjual.produk');
// });

// Route::get('/penjual/profile', function () {
//     return view('penjual.profile');
// });

// Route::get('/penjual/pesanan', function () {
//     return view('penjual.pesanan');
// });

// Route::get('/penjual/ulasan', function () {
//     return view('penjual.ulasan');
// });

// Route::get('/admin/persetujuan', function () {return view('admin.persetujuan');});
// Route::get('/admin/penjual', function () {
// return view('admin.penjual');});
// Route::get('/admin/pembeli', function () {
// return view('admin.pembeli');
// });



Route::middleware(['auth','userAkses:admin'])->group(function () 
{
Route::get('/admin', [AdminController::class, 'admin'])->name('admin.dashboard');
Route::get('/admin/persetujuan', [AdminController::class, 'persetujuan'])->name('admin.persetujuan');
Route::get('/admin/penjual', [AdminController::class, 'akun_penjual'])->name('admin.dashboard');
Route::get('/admin/pembeli', [AdminController::class, 'pembeli'])->name('admin.dashboard');


});

Route::middleware(['auth','userAkses:penjual'])->group(function () 
{
    Route::get('/penjual', [PenjualController::class, 'penjual'])->name('penjual.dashboard');
    Route::get('/penjual/produk', [PenjualController::class, 'produk'])->name('penjual.produk');
    //
    Route::post('/penjual/produk', [ProdukController::class, 'store'])->name('penjual.produk.store');
    //
    Route::get('/penjual/profile', [PenjualController::class, 'profile'])->name('penjual.profile');
    Route::get('/penjual/pesanan', [PenjualController::class, 'pesanan'])->name('penjual.pesanan');
    Route::get('/penjual/ulasan', [PenjualController::class, 'ulasan'])->name('penjual.ulasan');

//
//
Route::post('/produk/{id}/update', [ProdukController::class, 'update'])->name('produk.update');
Route::get('/produk/{id}', [ProdukController::class, 'edit'])->name('produk.edit');

// Delete
Route::post('/produk/{id}/hide', [ProdukController::class, 'hide'])->name('produk.hide');
Route::post('/produk/{id}/unhide', [ProdukController::class, 'unhide'])->name('produk.unhide');




});


// Route::get('/doku-payment', [DokuPaymentController::class, 'checkoutPayment']);

Route::prefix('/doku-payment')->group(function () {
    Route::get('/', [DokuPaymentController::class, 'checkoutPayment'])->name('doku');
});











require __DIR__.'/auth.php';
