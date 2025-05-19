public function index() {
    $jumlahBuku = \App\Models\Buku::count();
    $jumlahAnggota = \App\Models\Anggota::count();
    $jumlahTransaksi = \App\Models\Transaksi::count(); // contoh tambahan

    return view('beranda', compact('jumlahBuku', 'jumlahAnggota', 'jumlahTransaksi'));
}
