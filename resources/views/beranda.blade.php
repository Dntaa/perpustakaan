@extends('layouts.app')

@section('content')
<section class="bg-gray-700 text-white py-16 px-8 md:px-16">
    <!-- Hero Section -->
    <div class="flex flex-col items-center justify-center text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">
            Selamat Datang di <span class="text-yellow-400">Sistem Informasi Perpustakaan</span>
        </h2>
        <p class="text-lg md:text-xl max-w-3xl mx-auto mb-6">
            "Membaca adalah jendela dunia"
        </p>

        <!-- Statistik -->
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-8 max-w-4xl w-full">
            <div class="bg-indigo-600 rounded-lg p-6 shadow-lg">
                <h3 class="text-2xl font-semibold mb-2">Jumlah Buku</h3>
                <p class="text-4xl font-bold text-yellow-400">{{ $jumlahBuku }}</p>
            </div>
            <div class="bg-indigo-600 rounded-lg p-6 shadow-lg">
                <h3 class="text-2xl font-semibold mb-2">Jumlah Anggota</h3>
                <p class="text-4xl font-bold text-yellow-400">{{ $jumlahAnggota }}</p>
            </div>
            <div class="bg-indigo-600 rounded-lg p-6 shadow-lg">
                <h3 class="text-2xl font-semibold mb-2">Jumlah Transaksi</h3>
                <p class="text-4xl font-bold text-yellow-400">{{ $jumlahTransaksi }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
