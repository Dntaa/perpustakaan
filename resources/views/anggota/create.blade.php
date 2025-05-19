@extends('layouts.app')

@section('content')
<section class="max-w-4xl mx-auto p-6 bg-slate-300 shadow-lg rounded-lg">
    <h3 class="text-center text-2xl font-semibold bg-slate-500 p-4 rounded-md mb-6 text-white">Input Data Anggota</h3>
    
    <form action="{{ route('anggota.store') }}" method="POST" class="space-y-6">
        @csrf



        <div>
            <label class="block font-semibold mb-2 text-lg">Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
        </div>

        <div>
    <label class="block font-semibold mb-2 text-lg">Jenis Kelamin</label>
    <div class="flex gap-6 items-center">
        <label class="inline-flex items-center">
            <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-radio text-blue-600" required>
            <span class="ml-2">Laki-laki</span>
        </label>
        <label class="inline-flex items-center">
            <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-radio text-pink-600" required>
            <span class="ml-2">Perempuan</span>
        </label>
    </div>
</div>


        <div>
            <label class="block font-semibold mb-2 text-lg">Alamat</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 transition-all">
                Simpan Data
            </button>
        </div>
    </form>
</section>
@endsection
