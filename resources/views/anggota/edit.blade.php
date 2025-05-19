@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-6 bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6 text-center text-gray-800">Edit Anggota</h1>

    <form action="/anggota/{{ $anggota->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $anggota->nama) }}" 
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div class="mb-4">
            <label for="jenis_kelamin" class="block text-gray-700 font-semibold mb-2">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $anggota->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-6">
            <label for="alamat" class="block text-gray-700 font-semibold mb-2">Alamat</label>
            <textarea name="alamat" id="alamat" rows="4"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>{{ old('alamat', $anggota->alamat) }}</textarea>
        </div>

        <div class="flex justify-between">
            <a href="/anggota" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400 transition-all">Batal</a>
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition-all">Simpan</button>
        </div>
    </form>
</div>
@endsection
