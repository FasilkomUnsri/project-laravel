<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
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

}
