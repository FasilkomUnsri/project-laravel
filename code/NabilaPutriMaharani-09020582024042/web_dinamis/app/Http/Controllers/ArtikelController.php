<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index(){
        $artikels = Artikel::latest()->paginate(10);
        return view('artikel.index', compact('artikels'));
    }

    public function create()
{
    return view('artikel.create');
}

public function store(Request $request)
{
    $this->validate($request, [
        'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        'judul'     => 'required',
        'isi'   => 'required'
    ]);

    $gambar = $request->file('gambar');
    $gambar->storeAs('public/artikels', $gambar->hashName());

    $artikel = Artikel::create([
        'gambar'     => $gambar->hashName(),
        'judul'     => $request->judul,
        'isi'   => $request->isi
    ]);

    if($artikel){
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        return redirect()->route('artikel.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

    public function edit(Artikel $artikel)
    {
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'isi'   => 'required'
        ]);

        $artikel = Artikel::findOrFail($artikel->id);

        if($request->file('gambar') == "") {

            $artikel->update([
                'judul'     => $request->judul,
                'isi'   => $request->isi
            ]);

        } else {

            Storage::disk('local')->delete('public/artikels/'.$artikel->gambar);

            $gambar = $request->file('gambar');
            $gambar -> storeAs('public/artikels', $gambar->hashName());

            $artikel->update([
                'gambar'     => $gambar->hashname(),
                'judul'     => $request->judul,
                'isi'    => $request->isi
            ]);
        }

        if($artikel){
            return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Diupdate']);
        }else{
            return redirect()->route('artikel.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
{
    $artikel = Artikel::findOrFail($id);
    Storage::disk('local')->delete('public/artikels/'.$artikel->gambar);
    $artikel->delete();

    if($artikel){
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('artikel.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
}

}