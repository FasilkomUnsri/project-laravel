<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        $artikels = Artikel::latest()->paginate(10);
        return view('artikel.index',compact('artikels'));

    }
    
    public function create()
{
    return view('artikel.create');
}

public function store(Request $request)
{
    $this->validate($request, [
        'Nama'     => 'required',
        'notlp'     => 'required',
        'email'   => 'required'
    ]);

    
    $artikel = Artikel::create([
        'Nama'     => $request->Nama,
        'notlp'     => $request->notlp,
        'email'   => $request->email
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
        'Nama'     => 'required',
        'notlp'     => 'required',
        'email'   => 'required'
    ]);

    $artikel->update([
        'Nama'     => $request->Nama,
        'notlp'     => $request->notlp,
        'email'   => $request->email,
    ]);


    if($artikel){
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        return redirect()->route('artikel.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}
public function destroy($id)
{
    $artikel = Artikel::findOrFail($id);
    $artikel->delete();

    if($artikel){
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('artikel.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
}


}
