@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-6 bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6 text-center text-gray-800">Edit Buku</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-800 border border-red-300">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/buku/{{ $buku->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="judul" class="block text-gray-700 font-semibold mb-2">Judul Buku</label>
            <input type="text" name="judul" id="judul" value="{{ old('judul', $buku->judul) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="kategori" class="block text-gray-700 font-semibold mb-2">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="{{ old('kategori', $buku->kategori) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="pengarang" class="block text-gray-700 font-semibold mb-2">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang" value="{{ old('pengarang', $buku->pengarang) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="penerbit" class="block text-gray-700 font-semibold mb-2">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" value="{{ old('penerbit', $buku->penerbit) }}"
                   class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-6">
            <label for="status" class="block text-gray-700 font-semibold mb-2">Status</label>
            <select name="status" id="status" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
                <option value="Tersedia" {{ old('status', $buku->status) == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Dipinjam" {{ old('status', $buku->status) == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
            </select>
        </div>

        <div class="flex justify-between">
            <a href="/buku" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400 transition-all">Batal</a>
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-all">Simpan</button>
        </div>
    </form>
</div>
@endsection
