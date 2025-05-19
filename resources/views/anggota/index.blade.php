@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto mt-6 bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6 text-center text-gray-800">Daftar Anggota</h1>

    <!-- Tombol Tambah Buku -->
    <div class="flex justify-end mb-6">
        <a href="/anggota/create" class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition-all">
            Tambah Anggota
        </a>
    </div>

    <!-- Tabel Daftar Buku -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-lg rounded-lg">
            <thead>
                <tr class="bg-blue-100 text-gray-700">
                    <th class="border px-6 py-3 text-left">No</th>
                    <th class="border px-6 py-3 text-left">ID Anggota</th>
                    <th class="border px-6 py-3 text-left">Nama</th>
                    <th class="border px-6 py-3 text-left">Jenis Kelamin</th>
                    <th class="border px-6 py-3 text-left">Alamat</th>
                    <th class="border px-6 py-3 text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggotas as $no => $anggota)
                    <tr class="bg-gray-50 hover:bg-gray-100 transition-all">
                        <td class="border px-6 py-4 text-center">{{ $no + 1 }}</td>
                        <td class="border px-6 py-4">{{ $anggota->id }}</td>
                        <td class="border px-6 py-4">{{ $anggota->nama }}</td>
                        <td class="border px-6 py-4">{{ $anggota->jenis_kelamin }}</td>
                        <td class="border px-6 py-4">{{ $anggota->alamat }}</td>
                        <td class="border px-6 py-4 text-center">
                            <div class="flex justify-center gap-2">
                                <!-- Tombol Edit -->
                                <a href="/anggota/{{ $anggota->id }}/edit" 
                                class="bg-yellow-400 text-white px-4 py-2 rounded-lg hover:bg-yellow-500 transition-all">
                                    Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <form action="/anggota/{{ $anggota->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
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
        <a href="{{ route('anggota.cetak-pdf') }}" class="bg-green-400 text-white rounded-md px-4 py-2 hover:bg-gray-500 transition-all " target="_blank">
        Cetak PDF
        </a>
    </div>
</div>
@endsection
