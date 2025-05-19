<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        // Mengambil semua data anggota dan mengirimkannya ke view
        $anggotas = Anggota::all();
        return view('anggota.index', compact('anggotas'));
    }

    public function create()
    {
        // Menampilkan form untuk menambah anggota
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'nullable|string|max:255',
        ]);

        // Menyimpan data anggota tanpa kolom id karena id auto increment
        Anggota::create($validated);

        // Mengarahkan kembali ke daftar anggota dengan pesan sukses
        return redirect()->route('anggota.index')->with('success', 'Data anggota berhasil disimpan!');
    }

    public function destroy($id)
    {
        // Mencari anggota berdasarkan id, lalu menghapusnya
        Anggota::findOrFail($id)->delete();

        // Mengarahkan kembali ke daftar anggota dengan pesan sukses
        return redirect()->route('anggota.index')->with('success', 'Data anggota berhasil dihapus!');
    }
    public function edit($id)
{
    $anggota = Anggota::findOrFail($id);
    return view('anggota.edit', compact('anggota'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        'alamat' => 'required|string',
    ]);

    $anggota = Anggota::findOrFail($id);
    $anggota->update([
        'nama' => $request->nama,
        'jenis_kelamin' => $request->jenis_kelamin,
        'alamat' => $request->alamat,
    ]);

    return redirect('/anggota')->with('success', 'Data anggota berhasil diperbarui.');
}
}
