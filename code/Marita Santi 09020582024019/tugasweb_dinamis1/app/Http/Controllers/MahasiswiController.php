<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswi;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswiController extends Controller
{
    public function index()
    {
        $mahasiswis = Mahasiswi::latest()->paginate(10);
        return view('mahasiswi.index', compact('mahasiswis'));
    }

    public function create()
    {
    return view('mahasiswi.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'nim'     => 'required',
            'prodi'   => 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/mahasiswis', $gambar->hashName());

        $mahasiswi = Mahasiswi::create([
            'gambar'     => $gambar->hashName(),
            'nim'     => $request->nim,
            'prodi'   => $request->prodi
        ]);

        if($mahasiswi){
            return redirect()->route('mahasiswi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('mahasiswi.index')->with(['error' => 'Data Gagal Disimpan']);
        }
    }

    public function edit(Mahasiswi $mahasiswi)
{
    return view('mahasiswi.edit', compact('mahasiswi'));
}

public function update(Request $request, Mahasiswi $mahasiswi)
{
    $this->validate($request, [
        'nim'     => 'required',
        'prodi'   => 'required'
    ]);

    $mahasiswi = Mahasiswi::findOrFail($mahasiswi->id);

    if($request->file('gambar') == "") {

        $mahasiswi->update([
            'nim'     => $request->nim,
            'prodi'   => $request->prodi
        ]);

    } else {

        Storage::disk('local')->delete('public/mahasiswis/'.$mahasiswi->gambar);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/mahasiswis', $gambar->hashName());

        $mahasiswi->update([
            'gambar'     => $gambar->hashName(),
            'nim'     => $request->nim,
            'prodi'   => $request->prodi
        ]);

    }

    if($mahasiswi){
        return redirect()->route('mahasiswi.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        return redirect()->route('mahasiswi.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy($id)
{
    $mahasiswi = Mahasiswi::findOrFail($id);
    Storage::disk('local')->delete('public/mahasiswis/'.$mahasiswi->gambar);
    $mahasiswi->delete();

    if($mahasiswi){
        return redirect()->route('mahasiswi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('mahasiswi.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
}

}
