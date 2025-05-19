<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\TransaksiController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Transaksi;

// login

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/beranda', function () {
    return view('beranda');
})->middleware('auth')->name('beranda');

// logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Beranda
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/beranda', function () {
    return view('beranda');
});

// Buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit']);
Route::put('/buku/{id}', [BukuController::class, 'update']);
Route::get('/buku/cetak-pdf', function () {
    $bukus = Buku::all();
    $pdf = Pdf::loadView('buku.pdf', compact('bukus'));
    return $pdf->download('daftar_buku.pdf');
})->name('buku.cetak-pdf');


// Anggota
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota.index');
Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
Route::post('/anggota', [AnggotaController::class, 'store'])->name('anggota.store');
Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit']);
Route::put('/anggota/{id}', [AnggotaController::class, 'update']);
Route::get('/anggota/cetak-pdf', function () {
    $anggotas = Anggota::all();
    $pdf = Pdf::loadView('anggota.pdf', compact('anggotas'));
    return $pdf->download('daftar_anggota.pdf');
})->name('anggota.cetak-pdf');


//transaksi
// Route untuk halaman utama transaksi
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');

// Route untuk form tambah transaksi
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');

// Route untuk simpan transaksi baru
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');

// Route untuk hapus transaksi
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');

// Route untuk edit transaksi
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');

// Route untuk update transaksi
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
// Route untuk edit transaksi
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit']);
Route::put('/transaksi/{id}', [TransaksiController::class, 'update']);
// ✅ Route untuk export PDF

