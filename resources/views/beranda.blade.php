@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-purple-100 text-gray-800 py-16 px-8 md:px-16">
        <div class="flex flex-col items-center text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-3">
                Selamat Datang di <span class="text-purple-600">Perpustakaan Digital</span>
            </h2>
            <p class="text-lg md:text-xl max-w-2xl mb-6 text-gray-600">
                Temukan pengetahuan, inspirasi, dan petualangan dalam setiap halaman.
            </p>
            <!-- Ilustrasi SVG warna lembut -->
            <div class="w-36 h-36 mb-4">
                <img src="https://www.svgrepo.com/show/493708/open-book.svg" alt="Ilustrasi buku" class="w-full h-full object-contain opacity-80">
            </div>
        </div>
    </section>

    <!-- Section: Rekomendasi Hari Ini -->
    <section class="bg-white py-12 px-8 md:px-16">
        <h3 class="text-2xl font-semibold text-center text-gray-700 mb-6">📘 Rekomendasi Hari Ini</h3>

        <div class="max-w-4xl mx-auto bg-purple-50 p-6 rounded-lg shadow-sm flex flex-col sm:flex-row items-center gap-6 border border-purple-200">
            <img src="https://covers.openlibrary.org/b/id/10958365-L.jpg" alt="Sampul Buku" class="w-28 h-40 object-cover rounded-md shadow-md">
            <div>
                <h4 class="text-xl font-bold text-purple-700">The Power of Now</h4>
                <p class="text-sm text-gray-700 mt-2">
                    Sebuah panduan spiritual untuk hidup di masa kini. Membantu pembaca menyadari kekuatan pikiran dan kehadiran saat ini.
                </p>
                <a href="/buku" class="inline-block mt-4 text-purple-600 font-medium hover:underline">
                    📚 Jelajahi Koleksi Lain
                </a>
            </div>
        </div>
    </section>
@endsection
