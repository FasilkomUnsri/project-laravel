<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NovelController extends Controller
{
    public function index()
    {
        $novels = Novel::latest()->paginate(10);
        return view('novel.index', compact('novels'));
    }

    public function create()
{
    return view('novel.create');
}

public function store(Request $request)
{
    $this->validate($request, [
        'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        'judul'     => 'required',
        'isi'   => 'required'
    ]);

    $gambar = $request->file('gambar');
    $gambar->storeAs('public/novels', $gambar->hashName());

    $novel = Novel::create([
        'gambar'     => $gambar->hashName(),
        'judul'     => $request->judul,
        'isi'   => $request->isi
    ]);

    if($novel){
        return redirect()->route('novel.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        return redirect()->route('novel.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function edit(Novel $novel)
{
    return view('novel.edit', compact('novel'));
}

public function update(Request $request, Novel $novel)
{
    $this->validate($request, [
        'judul'     => 'required',
        'isi'   => 'required'
    ]);

    $novel = Novel::findOrFail($novel->id);

    if($request->file('gambar') == "") {

        $novel->update([
            'judul'     => $request->judul,
            'isi'   => $request->isi
        ]);

    } else {

        Storage::disk('local')->delete('public/novels/'.$novel->gambar);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/novels', $gambar->hashName());

        $novel->update([
            'gambar'     => $gambar->hashName(),
            'judul'     => $request->judul,
            'isi'   => $request->isi
        ]);

    }

    if($novel){
        return redirect()->route('novel.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        return redirect()->route('novel.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy($id)
{
    $novel = Novel::findOrFail($id);
    Storage::disk('local')->delete('public/novels/'.$novel->gambar);
    $novel->delete();

    if($novel){
        return redirect()->route('novel.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('novel.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
}
}
