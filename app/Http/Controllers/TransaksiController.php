<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Anggota;
use App\Models\Buku;
use Barryvdh\DomPDF\Facade\Pdf;

class TransaksiController extends Controller
{
    // Menampilkan daftar transaksi
    public function index()
    {
        $transaksis = Transaksi::all(); // Mengambil semua data transaksi
        return view('transaksi.index', compact('transaksis')); // Mengirim data transaksi ke view
    }

    // Menampilkan form untuk membuat transaksi baru
    public function create()
    {
        // Mengambil data anggota dan buku yang tersedia untuk dipilih
        $anggotas = Anggota::all();
        $bukus = Buku::all();

        // Mengirim data anggota dan buku ke view
        return view('transaksi.create', compact('anggotas', 'bukus'));
    }

    // Menyimpan transaksi baru
    public function store(Request $request)
    {
        // Debugging untuk melihat data yang dikirimkan dari form
        // dd($request->all());

        // Validasi data yang dikirim
        $validated = $request->validate([
            'anggota_id' => 'required|exists:anggotas,id', // Pastikan anggota_id valid dan ada di tabel anggotas
            'buku_id' => 'required|exists:bukus,id', // Pastikan buku_id valid dan ada di tabel bukus
            'tgl_pinjam' => 'required|date', // Pastikan tgl_pinjam valid
            'tgl_kembali' => 'required|date', // Pastikan tgl_kembali valid
        ]);

        // Menyimpan data transaksi baru ke dalam tabel transaksis
        Transaksi::create([
            'anggota_id' => $validated['anggota_id'], // Data anggota yang dipilih
            'buku_id' => $validated['buku_id'], // Data buku yang dipilih
            'tgl_pinjam' => $validated['tgl_pinjam'], // Tanggal peminjaman
            'tgl_kembali' => $validated['tgl_kembali'], // Tanggal pengembalian
        ]);

        // Redirect ke halaman index transaksi dengan pesan sukses
        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil disimpan!');
    }

    // Menghapus transaksi berdasarkan ID
    public function destroy($id)
    {
        // Mencari transaksi berdasarkan ID dan menghapusnya
        Transaksi::findOrFail($id)->delete();

        // Redirect ke halaman index transaksi dengan pesan sukses
        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil dihapus!');
    }
    public function edit($id)
{
    $transaksi = Transaksi::findOrFail($id);
    $anggotas = Anggota::all();
    $bukus = Buku::all();
    return view('transaksi.edit', compact('transaksi', 'anggotas', 'bukus'));
}
public function update(Request $request, $id)
{
    $validated = $request->validate([
        'anggota_id' => 'required|exists:anggotas,id',
        'buku_id' => 'required|exists:bukus,id',
        'tgl_pinjam' => 'required|date',
        'tgl_kembali' => 'required|date',
    ]);

    $transaksi = Transaksi::findOrFail($id);
    $transaksi->update($validated);

    return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil diperbarui!');
}
}