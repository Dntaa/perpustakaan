@extends('layouts.app')
@section('content')
<section class="max-w-4xl mx-auto p-6 bg-slate-300 shadow-lg rounded-lg">
    <div id="label-page" class="text-center font-bold text-2xl mb-6">
        <h3 class="text-center text-2xl font-semibold bg-slate-500 p-4 rounded-md mb-6 text-white">Input Data Buku</h3>
    </div>
    <div id="content" class="bg-slate-300 p-6 max-w-4xl mx-auto">
        <form action="{{ route('buku.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block font-semibold mb-2 text-lg">Judul Buku</label>
                <input type="text" name="judul" placeholder="Masukkan Judul Buku" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block font-semibold mb-2 text-lg">Pengarang</label>
                <input type="text" name="pengarang" placeholder="Masukkan Nama Pengarang" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block font-semibold mb-2 text-lg">Kategori</label>
                <input type="text" name="kategori" placeholder="Masukkan Kategori Buku" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block font-semibold mb-2 text-lg">Penerbit</label>
                <input type="text" name="penerbit" placeholder="Masukkan Nama Penerbit" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block font-semibold mb-2 text-lg">Status</label>
                <select name="status" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
                    <option value="">-- Pilih Status --</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Dipinjam">Dipinjam</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 transition-all cursor-pointer">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</section>
</form>
@endsection
