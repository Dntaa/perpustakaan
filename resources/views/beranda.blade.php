@extends('layouts.app')

@section('content')
<section class="bg-indigo-700 text-white py-16 px-8 md:px-16">
    <!-- Hero Section -->
    <div class="flex flex-col items-center justify-center text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">
            Selamat Datang di <span class="text-yellow-400">Sistem Informasi Perpustakaan</span>
        </h2>
        <p class="text-lg md:text-xl max-w-3xl mx-auto mb-6 italic opacity-90">
            "Membaca adalah jendela dunia, dan kami bantu membukanya untuk Anda."
        </p>

        <!-- CTA Button -->
        <a href="/buku" class="bg-yellow-400 text-indigo-800 font-semibold px-6 py-3 mt-4 rounded-full shadow-lg hover:bg-yellow-300 transition-all">
            📚 Jelajahi Koleksi Buku
        </a>
    </div>
</section>

<!-- Tambahan Statistik Section -->
<section class="bg-white text-gray-800 py-12 px-8 md:px-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div>
            <h3 class="text-3xl font-bold text-indigo-700">1200+</h3>
            <p class="mt-2 text-sm font-medium">Judul Buku</p>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-indigo-700">350+</h3>
            <p class="mt-2 text-sm font-medium">Anggota Aktif</p>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-indigo-700">98%</h3>
            <p class="mt-2 text-sm font-medium">Tingkat Kepuasan</p>
        </div>
        <div>
            <h3 class="text-3xl font-bold text-indigo-700">24/7</h3>
            <p class="mt-2 text-sm font-medium">Akses Informasi</p>
        </div>
    </div>
</section>

<!-- Quotes Section -->
<section class="bg-gray-100 py-12 px-8 md:px-16">
    <div class="text-center max-w-4xl mx-auto">
        <svg class="mx-auto mb-4 w-10 h-10 text-indigo-500" fill="none" stroke="currentColor" stroke-width="1.5"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M7.5 8.25a3.75 3.75 0 0 1 3.75 3.75v.75a3.75 3.75 0 0 1-3.75 3.75H6v1.5h1.5A5.25 5.25 0 0 0 12.75 13.5V12A5.25 5.25 0 0 0 7.5 6.75H6v1.5h1.5zM17.25 8.25A3.75 3.75 0 0 1 21 12v.75a3.75 3.75 0 0 1-3.75 3.75H18v1.5h1.5A5.25 5.25 0 0 0 24.75 13.5V12A5.25 5.25 0 0 0 19.5 6.75H18v1.5h1.5z" />
        </svg>
        <blockquote class="italic text-lg text-gray-700">
            “Perpustakaan bukanlah gudang buku, tetapi taman ide, sumber inspirasi, dan rumah para pemimpi.”
        </blockquote>
    </div>
</section>
@endsection
