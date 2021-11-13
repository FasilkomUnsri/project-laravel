<?php

namespace App\Http\Controllers;

use App\Models\Masker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MaskerController extends Controller
{
    public function index()
{
    $maskers = Masker::latest()->paginate(10);
    return view('masker.index', compact('maskers'));
}
    public function create()
{
    return view('masker.create');
}

public function store(Request $request)
{
    $this->validate($request, [
        'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        'judul'     => 'required',
        'isi'       => 'required'
    ]);

    $gambar = $request->file('gambar');
    $gambar->storeAs('public/maskers', $gambar->hashName());

    $masker = Masker::create([
        'gambar'     => $gambar->hashName(),
        'judul'      => $request->judul,
        'isi'        => $request->isi
    ]);

    if($masker){
        return redirect()->route('masker.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        return redirect()->route('masker.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}
    public function edit(Masker $masker)
    {
        return view('masker.edit', compact('masker'));
    }
    
    public function update(Request $request, Masker $artikel)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'isi'       => 'required'
        ]);
    
        $masker = Masker::findOrFail($masker->id);
    
        if($request->file('gambar') == "") {
    
            $amasker->update([
                'judul'     => $request->judul,
                'isi'       => $request->isi
            ]);
    
        } else {
    
            Storage::disk('local')->delete('public/maskers/'.$masker->gambar);
    
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/maskers', $gambar->hashName());
    
            $artikel->update([
                'gambar'     => $gambar->hashName(),
                'judul'      => $request->judul,
                'isi'        => $request->isi
            ]);
    
        }
    
        if($masker){
            return redirect()->route('masker.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('masker.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id)
{
    $masker=Masker::findOrFail($id);
    Storage::disk('local')->delete('public/maskers/'.$masker->gambar);
    $masker->delete();

    if($masker){
        return redirect()->route('masker.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('masker.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
}

}

