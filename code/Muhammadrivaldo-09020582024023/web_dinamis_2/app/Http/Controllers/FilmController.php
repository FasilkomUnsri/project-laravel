<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::latest()->paginate(10);
        return view('film.index', compact('films'));
    }
    public function create()
{
    return view('film.create');
}

public function store(Request $request)
{
    $this->validate($request, [
        'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        'judul'     => 'required',
        'isi'   => 'required'
    ]);

    $gambar = $request->file('gambar');
    $gambar->storeAs('public/films', $gambar->hashName());

    $film = Film::create([
        'gambar'     => $gambar->hashName(),
        'judul'     => $request->judul,
        'isi'   => $request->isi
    ]);

    if($film){
        return redirect()->route('film.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        return redirect()->route('film.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}
public function edit(Film $film)
{
    return view('film.edit', compact('film'));
}

public function update(Request $request, Film $film)
{
    $this->validate($request, [
        'judul'     => 'required',
        'isi'   => 'required'
    ]);

    $film = Film::findOrFail($film->id);

    if($request->file('gambar') == "") {

        $film->update([
            'judul'     => $request->judul,
            'isi'   => $request->isi
        ]);

    } else {

        Storage::disk('local')->delete('public/films/'.$film->gambar);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/films', $gambar->hashName());

        $film->update([
            'gambar'     => $gambar->hashName(),
            'judul'     => $request->judul,
            'isi'   => $request->isi
        ]);

    }

    if($film){
        return redirect()->route('film.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        return redirect()->route('film.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}
public function destroy($id)
{
    $film = Film::findOrFail($id);
    Storage::disk('local')->delete('public/films/'.$film->gambar);
    $film->delete();

    if($film){
        return redirect()->route('film.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('film.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
}

}