@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-6 bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6 text-center text-gray-800">Edit Transaksi</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-800 border border-red-300">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/transaksi/{{ $transaksi->id }}" method="POST">
        @csrf
        @method('PUT')


        <div class="mb-4">
            <label for="anggota_id" class="block text-gray-700 font-semibold mb-2">ID Anggota</label>
            <input type="text" name="anggota_id" id="anggota_id" value="{{ old('anggota_id', $transaksi->anggota_id) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="buku_id" class="block text-gray-700 font-semibold mb-2">ID Buku</label>
            <input type="text" name="anggota_id" id="buku_id" value="{{ old('id_buku', $transaksi->buku_id) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="tgl_pinjam" class="block text-gray-700 font-semibold mb-2">Tanggal Peminjaman</label>
            <input type="text" name="tgl_pinjam" id="tgl_pinjam" value="{{ old('tgl_pinjam', $transaksi->tgl_pinjam) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="tgl_kembali" class="block text-gray-700 font-semibold mb-2">Tanggal Pengembalian</label>
            <input type="text" name="tgl_kembali" id="tgl_kembali" value="{{ old('tgl_pinjam', $transaksi->tgl_kembali) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="flex justify-between">
            <a href="/buku" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400 transition-all">Batal</a>
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-all">Simpan</button>
        </div>
    </form>
</div>
@endsection
