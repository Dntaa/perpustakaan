@extends('layouts.app')

@section('content')
<section class="p-6 max-w-6xl mx-auto">
    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-4 mb-4 rounded-md">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="bg-red-200 text-red-800 p-4 mb-4 rounded-md">
            {{ session('error') }}
        </div>
    @endif

    <div class="text-center font-bold text-2xl mb-6">
        <h3>Tampil Data Transaksi</h3>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-lg">
        <div class="mb-4 text-start">
            <a href="{{ route('transaksi.create') }}" class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-gray-500 transition-all">
                Tambah Transaksi
            </a>
        </div>

        <!-- Responsif table container -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow rounded-lg text-sm">
                <thead>
                    <tr class="bg-blue-100 text-gray-700">
                        <th class="border px-4 py-2">No</th>
                        <th class="border px-4 py-2">ID Transaksi</th>
                        <th class="border px-4 py-2">ID Anggota</th>
                        <th class="border px-4 py-2">ID Buku</th>
                        <th class="border px-4 py-2">Tanggal Peminjaman</th>
                        <th class="border px-4 py-2">Tanggal Pengembalian</th>
                        <th class="border px-4 py-2">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transaksis as $index => $transaksi)
                    <tr class="border hover:bg-gray-50">
                        <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->id }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->anggota_id }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->buku_id }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->tgl_pinjam }}</td>
                        <td class="border px-4 py-2">{{ $transaksi->tgl_kembali }}</td>
                        <td class="border px-4 py-2">
                            <div class="flex flex-col sm:flex-row justify-center gap-2">
                                <!-- Edit Button -->
                                <a href="/transaksi/{{ $transaksi->id }}/edit" 
                                   class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 transition-all text-sm">
                                    Edit
                                </a>
                                <!-- Delete Button -->
                                <form action="/transaksi/{{ $transaksi->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition-all text-sm">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-4 text-gray-500">Belum ada data transaksi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
