<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::latest()->paginate(10);
        return view('buku.index', compact('bukus'));
    }

    public function create()
{
    return view('buku.create');
}

public function store(Request $request)
{
    $this->validate($request, [
        'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        'judul'     => 'required',
        'isi'   => 'required'
    ]);

    $gambar = $request->file('gambar');
    $gambar->storeAs('public/bukus', $gambar->hashName());

    $buku = buku::create([
        'gambar'     => $gambar->hashName(),
        'judul'     => $request->judul,
        'isi'   => $request->isi
    ]);

    if($buku){
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        return redirect()->route('buku.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function edit(Buku $buku)
{
    return view('buku.edit', compact('buku'));
}

public function update(Request $request, Buku $buku)
{
    $this->validate($request, [
        'judul'     => 'required',
        'isi'   => 'required'
    ]);

    $buku = Buku::findOrFail($buku->id);

    if($request->file('gambar') == "") {

        $buku->update([
            'judul'     => $request->judul,
            'isi'   => $request->isi
        ]);

    } else {

        Storage::disk('local')->delete('public/bukus/'.$buku->gambar);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/bukus', $gambar->hashName());

        $buku->update([
            'gambar'     => $gambar->hashName(),
            'judul'     => $request->judul,
            'isi'   => $request->isi
        ]);

    }

    if($buku){
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        return redirect()->route('buku.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy($id)
{
    $buku = Buku::findOrFail($id);
    Storage::disk('local')->delete('public/bukus/'.$buku->gambar);
    $buku->delete();

    if($buku){
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('buku.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
}
}