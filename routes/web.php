<?php
use App\Http\Controllers\KostController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\GedungController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\PembayaranController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', [KostController::class, 'index'])->name('beranda');

// Rute untuk beranda
Route::middleware(['auth'])->group(function () {
    Route::middleware(['admin'])->group(function () {
        Route::get('/beranda/kamar', [KostController::class, 'kamar'])->name('beranda.kamar');
        Route::get('/beranda/sewa', [KostController::class, 'sewa'])->name('beranda.sewa');
        Route::get('/beranda/fasilitas', [KostController::class, 'fasilitas'])->name('beranda.fasilitas');
        Route::get('/beranda/data_penyewa', [KostController::class, 'data_penyewa'])->name('beranda.data_penyewa');
        Route::get('/beranda/about', [KostController::class, 'about'])->name('beranda.about');
        Route::get('/beranda/pembayaran', [KostController::class, 'pembayaran'])->name('beranda.pembayaran');
        Route::get('/beranda/laporan', [KostController::class, 'laporan'])->name('beranda.laporan');
    });
});

// Rute untuk kamar
Route::middleware(['auth'])->group(function() {
    Route::get('/beranda/kamar', [KamarController::class, 'index'])->name('beranda.kamar');
    Route::get('/kamar', [KamarController::class, 'index'])->name('kamar.index');
    Route::get('/kamar/create', [KamarController::class, 'create'])->name('kamar.create');
    Route::post('/kamar/store', [KamarController::class, 'store'])->name('kamar.store');
    Route::get('/kamar/{id}/edit', [KamarController::class, 'edit'])->name('kamar.edit');
    Route::put('/kamar/{id}/update', [KamarController::class, 'update'])->name('kamar.update');
    Route::post('/kamar', [KamarController::class, 'store'])->name('produk.store');
    Route::post('/kamar/delete/{id}', [KamarController::class, 'destroy'])->name('kamar.delete');
    //route gedung
    Route::get('/beranda/gedung', [GedungController::class, 'index'])->name('beranda.gedung');
    Route::get('/beranda-gedung', [GedungController::class, 'index'])->name('beranda.gedung');
    Route::get('/gedung', [GedungController::class, 'index'])->name('gedung.index');
    Route::get('/gedung/create', [GedungController::class, 'create'])->name('gedung.create');
    Route::post('/gedung/store', [GedungController::class, 'store'])->name('gedung.store');
    Route::post('/gedung/delete/{id}', [GedungController::class, 'destroy'])->name('gedung.delete');
    Route::get('/gedung/{id}/edit', [GedungController::class, 'edit'])->name('gedung.edit');
    Route::post('/gedung/update/{id}', [GedungController::class, 'update'])->name('gedung.update');
    Route::post('/submit-data', [PenghuniController::class, 'store'])->name('penghuni.store');

});


// Rute untuk penghuni
Route::get('/beranda/penghuni', [PenghuniController::class, 'index'])->name('beranda.penghuni');
Route::get('/penghuni', [PenghuniController::class, 'index'])->name('penghuni.index');
Route::get('/penghuni/create', [PenghuniController::class, 'create'])->name('penghuni.create');
Route::post('/penghuni/store', [PenghuniController::class, 'store'])->name('penghuni.store');
Route::get('/penghuni/edit/{id}', [PenghuniController::class, 'edit'])->name('penghuni.edit');
Route::put('/penghuni/update/{id}', [PenghuniController::class, 'update'])->name('penghuni.update');
Route::post('/penghuni/{id}', [PenghuniController::class, 'destroy'])->name('penghuni.delete');

// Rute untuk pembayaran
Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
    Route::get('/data-pembayaran', [PembayaranController::class, 'data'])->name('pembayaran.data');
    Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
    Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store');
    Route::post('/pembayaran/{id}/update', [PembayaranController::class, 'update'])->name('pembayaran.update');
    Route::get('/laporan', [PembayaranController::class, 'laporanPemasukan'])->name('pembayaran.laporan');
});


Route::get('home', function () {
    return view('home');
});
