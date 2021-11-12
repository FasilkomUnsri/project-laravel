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
            'foto'     => 'required|image|mimes:png,jpg,jpeg',
            'nim'     => 'required',
            'nama'   => 'required',
            'prodi'   => 'required'
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/artikels', $foto->hashName());

        $artikel = Artikel::create([
            'foto'     => $foto->hashName(),
            'nim'     => $request->nim,
            'nama'   => $request->nama,
            'prodi'   => $request->prodi
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
            'nim'     => 'required',
            'nama'   => 'required',
            'prodi'   => 'required'
        ]);

        $artikel = Artikel::findOrFail($artikel->id);

        if($request->file('foto') == "") {

            $artikel->update([
                'nim'     => $request->nim,
                'nama'   => $request->nama,
                'prodi'   => $request->prodi
            ]);

        } else {

            Storage::disk('local')->delete('public/artikels/'.$artikel->foto);

            $foto = $request->file('foto');
            $foto->storeAs('public/artikels', $foto->hashName());

            $artikel->update([
                'foto'     => $foto->hashName(),
                'nim'     => $request->nim,
                'nama'   => $request->nama,
                'prodi'   => $request->prodi
            ]);

        }

        if($artikel){
            return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('artikel.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        Storage::disk('local')->delete('public/artikels/'.$artikel->foto);
        $artikel->delete();

        if($artikel){
            return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('artikel.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }



}
