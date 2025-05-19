<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Transaksi;

class HomeController extends Controller
{
    public function index()
    {
        $jumlahBuku = Buku::count();
        $jumlahAnggota = Anggota::count();
        $jumlahTransaksi = Transaksi::count();

        return view('beranda', compact('jumlahBuku', 'jumlahAnggota', 'jumlahTransaksi'));
    }
}
