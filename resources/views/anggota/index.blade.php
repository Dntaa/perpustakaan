@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto mt-6 bg-white p-4 sm:p-6 md:p-8 rounded-lg shadow-md">
    <h1 class="text-2xl sm:text-3xl font-semibold mb-6 text-center text-gray-800">Daftar Anggota</h1>

    <!-- Tombol Tambah Anggota -->
    <div class="flex justify-end mb-6">
        <a href="/anggota/create" class="bg-green-500 text-white px-4 py-2 sm:px-6 sm:py-3 rounded-lg shadow-md hover:bg-green-600 transition-all text-sm sm:text-base">
            Tambah Anggota
        </a>
    </div>

    <!-- Tabel Daftar Anggota -->
    <div class="overflow-x-auto rounded-lg">
        <table class="min-w-full bg-white text-sm sm:text-base">
            <thead>
                <tr class="bg-blue-100 text-gray-700">
                    <th class="border px-4 py-2 sm:px-6 sm:py-3 text-left">No</th>
                    <th class="border px-4 py-2 sm:px-6 sm:py-3 text-left">ID Anggota</th>
                    <th class="border px-4 py-2 sm:px-6 sm:py-3 text-left">Nama</th>
                    <th class="border px-4 py-2 sm:px-6 sm:py-3 text-left">Jenis Kelamin</th>
                    <th class="border px-4 py-2 sm:px-6 sm:py-3 text-left">Alamat</th>
                    <th class="border px-4 py-2 sm:px-6 sm:py-3 text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggotas as $no => $anggota)
                    <tr class="bg-gray-50 hover:bg-gray-100 transition-all">
                        <td class="border px-4 py-2 sm:px-6 sm:py-4 text-center">{{ $no + 1 }}</td>
                        <td class="border px-4 py-2 sm:px-6 sm:py-4">{{ $anggota->id }}</td>
                        <td class="border px-4 py-2 sm:px-6 sm:py-4">{{ $anggota->nama }}</td>
                        <td class="border px-4 py-2 sm:px-6 sm:py-4">{{ $anggota->jenis_kelamin }}</td>
                        <td class="border px-4 py-2 sm:px-6 sm:py-4">{{ $anggota->alamat }}</td>
                        <td class="border px-4 py-2 sm:px-6 sm:py-4 text-center">
                            <div class="flex flex-wrap justify-center gap-2">
                                <!-- Tombol Edit -->
                                <a href="/anggota/{{ $anggota->id }}/edit" 
                                   class="bg-yellow-400 text-white px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg hover:bg-yellow-500 transition-all text-sm">
                                    Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="/anggota/{{ $anggota->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 text-white px-3 py-1.5 sm:px-4 sm:py-2 rounded-lg hover:bg-red-600 transition-all text-sm">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tombol Cetak PDF -->
    <div class="mt-4 sm:mt-6 text-right">
        <a href="{{ route('anggota.cetak-pdf') }}" target="_blank"
           class="inline-block bg-green-400 text-white rounded-md px-4 py-2 hover:bg-gray-500 transition-all text-sm sm:text-base">
            Cetak PDF
        </a>
    </div>
</div>
@endsection
