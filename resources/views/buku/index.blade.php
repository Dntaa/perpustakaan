@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto mt-6 bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6 text-center text-gray-800">Daftar Buku</h1>

    <!-- Tombol Tambah Buku -->
    <div class="flex justify-end mb-6">
        <a href="/buku/create" class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition-all">
            Tambah Buku
        </a>
    </div>

    <!-- Tabel Daftar Buku -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-lg rounded-lg">
            <thead>
                <tr class="bg-blue-100 text-gray-700">
                    <th class="border px-6 py-3 text-left">No</th>
                    <th class="border px-6 py-3 text-left">ID Buku</th>
                    <th class="border px-6 py-3 text-left">Judul Buku</th>
                    <th class="border px-6 py-3 text-left">Kategori</th>
                    <th class="border px-6 py-3 text-left">Pengarang</th>
                    <th class="border px-6 py-3 text-left">Penerbit</th>
                    <th class="border px-6 py-3 text-left">Status</th>
                    <th class="border px-6 py-3 text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $no => $buku)
                    <tr class="bg-gray-50 hover:bg-gray-100 transition-all">
                        <td class="border px-6 py-4 text-center">{{ $no + 1 }}</td>
                        <td class="border px-6 py-4">{{ $buku->id }}</td>
                        <td class="border px-6 py-4">{{ $buku->judul }}</td>
                        <td class="border px-6 py-4">{{ $buku->kategori }}</td>
                        <td class="border px-6 py-4">{{ $buku->pengarang }}</td>
                        <td class="border px-6 py-4">{{ $buku->penerbit }}</td>
                        <td class="border px-6 py-4">{{ $buku->status }}</td>
                        <td class="border px-6 py-4 text-center">
                            <div class="flex justify-center gap-2">
                                <!-- Tombol Edit -->
                                <a href="/buku/{{ $buku->id }}/edit"
                                class="bg-yellow-400 text-white px-4 py-2 rounded-lg hover:bg-yellow-500 transition-all">
                                    Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="/buku/{{ $buku->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition-all">
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
<div class=" mt-3">
    <a href="{{ route('buku.cetak-pdf') }}" class="bg-green-400 text-white rounded-md px-4 py-2 hover:bg-gray-500 transition-all " target="_blank">
    Cetak PDF
    </a>
</div>
@endsection
