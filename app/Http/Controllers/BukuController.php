<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'Data buku berhasil disimpan!');
    }

    public function destroy($id)
    {
        Buku::findOrFail($id)->delete();
        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus!');
    }
    public function edit($id)
{
    $buku = Buku::findOrFail($id);
    return view('buku.edit', compact('buku'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'kategori' => 'required|string|max:100',
        'pengarang' => 'required|string|max:100',
        'penerbit' => 'required|string|max:100',
        'status' => 'required|in:Tersedia,Dipinjam',
    ]);

    $buku = Buku::findOrFail($id);
    $buku->update($request->only(['judul', 'kategori', 'pengarang', 'penerbit', 'status']));

    return redirect('/buku')->with('success', 'Data buku berhasil diperbarui.');
}
}
