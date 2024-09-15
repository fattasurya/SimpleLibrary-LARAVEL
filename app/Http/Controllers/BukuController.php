<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        
        $buku = Buku::all();

        
        return view('buku', compact('buku'));
    }

    public function show($id) {
        $buku = Buku::findOrFail($id);
        return view('show', compact('buku'));
    }
    

    public function store(Request $request)
{
    
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'penerbit' => 'required|string|max:255',
    ]);

    Buku::create($validated);

    return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
}

public function update(Request $request, $id)
{
    
    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'penulis' => 'required|string|max:255',
        'penerbit' => 'required|string|max:255',
    ]);

    $buku = Buku::findOrFail($id);
    $buku->update($validated);

    return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
}

public function destroy($id)
{
    
    $buku = Buku::findOrFail($id);
    $buku->delete();

    return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
}

}
