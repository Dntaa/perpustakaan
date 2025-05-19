<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function index() {
        $jumlahBuku = Buku::count();
        $jumlahAnggota = Anggota::count();
        $jumlahTransaksi = Transaksi::count(); // contoh tambahan

        return view('beranda', compact('jumlahBuku', 'jumlahAnggota', 'jumlahTransaksi'));
    }
}
