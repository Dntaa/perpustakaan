@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="bg-emerald-100 text-slate-800 py-16 px-6 md:px-20">
        <div class="flex flex-col items-center text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Jelajahi Dunia Buku di <span class="text-emerald-600">Perpustakaan Digital</span>
            </h2>
            <p class="text-lg md:text-xl max-w-2xl text-slate-600 mb-6">
                Temukan inspirasi, ilmu, dan cerita menarik di setiap halaman.
            </p>
            <!-- Ilustrasi -->
            <div class="w-32 h-32 mb-4">
                <img src="https://www.svgrepo.com/show/435844/book-open-education.svg" alt="Ilustrasi buku" class="w-full h-full object-contain">
            </div>
        </div>
    </section>

    <!-- Section: Rekomendasi Hari Ini -->
    <section class="bg-white py-12 px-6 md:px-20">
        <h3 class="text-2xl font-semibold text-center text-slate-800 mb-6">📚 Rekomendasi Hari Ini</h3>

        <div class="max-w-4xl mx-auto bg-slate-50 border border-slate-200 p-6 rounded-lg shadow-sm flex flex-col sm:flex-row items-center gap-6">
            <img src="https://covers.openlibrary.org/b/id/11102233-L.jpg" alt="Sampul Buku" class="w-28 h-40 object-cover rounded-md shadow">
            <div>
                <h4 class="text-xl font-bold text-emerald-700">Deep Work</h4>
                <p class="text-slate-700 text-sm mt-2">
                    Buku ini membahas pentingnya fokus mendalam dalam era gangguan digital. Cocok untuk pelajar dan profesional.
                </p>
                <a href="/buku" class="inline-block mt-4 text-emerald-600 hover:underline font-medium">
                    📖 Lihat Koleksi Lain
                </a>
            </div>
        </div>
    </section>
@endsection
