@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Form Tambah Transaksi</h2>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf

        <!-- Pilih Anggota -->
        <div class="mb-4">
            <label for="anggota_id" class="block text-gray-700 font-medium mb-2">Pilih Anggota</label>
            <select name="anggota_id" id="anggota_id" class="w-full border px-4 py-2 rounded-md">
                @foreach($anggotas as $anggota)
                    <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
                @endforeach
            </select>
        </div>

        <!-- Pilih Buku -->
        <div class="mb-4">
            <label for="buku_id" class="block text-gray-700 font-medium mb-2">Pilih Buku</label>
            <select name="buku_id" id="buku_id" class="w-full border px-4 py-2 rounded-md">
                @foreach($bukus as $buku)
                    <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tanggal Peminjaman -->
        <div class="mb-4">
            <label for="tgl_pinjam" class="block text-gray-700 font-medium mb-2">Tanggal Peminjaman</label>
            <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="w-full border px-4 py-2 rounded-md" required>
        </div>

        <!-- Tanggal Pengembalian -->
        <div class="mb-6">
            <label for="tgl_kembali" class="block text-gray-700 font-medium mb-2">Tanggal Pengembalian</label>
            <input type="date" name="tgl_kembali" id="tgl_kembali" class="w-full border px-4 py-2 rounded-md" required>
        </div>

        <!-- Tombol Submit -->
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition-all">
                Simpan Transaksi
            </button>
        </div>
    </form>
</div>
@endsection
<!-- Footer -->