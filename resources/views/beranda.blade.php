@extends('layouts.app')

@section('content')
    <section class="bg-indigo-700 text-white py-16 px-8 md:px-16">
        <div class="flex flex-col items-center text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-3">
                Selamat Datang di <span class="text-yellow-300">Perpustakaan Digital</span>
            </h2>
            <p class="text-lg md:text-xl max-w-2xl mb-6 opacity-90">
                Membaca adalah jendela dunia — dan kami bantu membuka pintunya untukmu.
            </p>
            <!-- Tambahan SVG ilustrasi -->
            <div class="w-40 h-40 mb-4">
                <img src="https://www.svgrepo.com/show/346212/book-reader.svg" alt="Ilustrasi membaca" class="w-full h-full object-contain">
            </div>
        </div>
    </section>

    <!-- Section unik: Today’s Pick -->
    <section class="bg-white py-10 px-8 md:px-16">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">📖 Rekomendasi Hari Ini</h3>

        <div class="max-w-3xl mx-auto bg-gray-100 p-6 rounded-lg shadow-md flex flex-col sm:flex-row items-center gap-6">
            <img src="https://covers.openlibrary.org/b/id/10523364-L.jpg" alt="Book Cover" class="w-32 h-44 object-cover rounded-md shadow">
            <div>
                <h4 class="text-xl font-bold text-indigo-700">Atomic Habits</h4>
                <p class="text-gray-700 mt-2 text-sm">
                    Buku ini membahas bagaimana perubahan kecil bisa membawa dampak besar. Cocok untuk kamu yang ingin produktif dan konsisten!
                </p>
                <a href="/buku" class="inline-block mt-4 text-indigo-600 font-medium hover:underline">
                    📚 Lihat Buku Lainnya
                </a>
            </div>
        </div>
    </section>
@endsection
