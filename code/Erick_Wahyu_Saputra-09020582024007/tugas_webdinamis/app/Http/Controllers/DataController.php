<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function index()
{
    $datas = Data::latest()->paginate(10);
    return view('data.index', compact('datas'));
}

public function create()
{
    return view('data.create');
}

public function store(Request $request)
{
    $this->validate($request, [
        'nama' => 'required',
        'nim'    => 'required',
        'jurusan'  => 'required',
        'foto'       => 'required|image|mimes:png,jpg,jpeg'
    ]);

    $foto = $request->file('foto');
    $foto->storeAs('public/datas', $foto->hashName());

    $data = Data::create([
        'nama'   => $request->nama,
        'nim'      => $request->nim,
        'jurusan'    => $request->jurusan,
        'foto'         => $foto->hashName()
    ]);

    if($data){
        return redirect()->route('data.index')->with(['success' => 'Data Mahasiswa Berhasil Disimpan!']);
    }else{
        return redirect()->route('data.index')->with(['error' => 'Data Mahasiswa Gagal Disimpan!']);
    }
}

public function edit(Data $data)
{
    return view('data.edit', compact('data'));
}

public function update(Request $request, Data $data)
{
    $this->validate($request, [
        'nama' => 'required',
        'nim'     => 'required',
        'jurusan'      => 'required'
    ]);

    $data = Data::findOrFail($data->id);

    if($request->file('foto') == "") {

        $data->update([
            'nama' => $request->nama,
            'nim'     => $request->nim,
            'jurusan'    => $request->jurusan
        ]);

    } else {

        Storage::disk('local')->delete('public/datas/'.$data->foto);

        $foto = $request->file('foto');
        $foto->storeAs('public/datas', $foto->hashName());

        $data->update([
            'nama'   => $request->nama,
            'nim'      => $request->nim,
            'jurusan'    => $request->jurusan,
            'foto'         => $foto->hashName()
        ]);

    }

    if($data){
        return redirect()->route('data.index')->with(['success' => 'Data Mahasiswa Berhasil Diupdate!']);
    }else{
        return redirect()->route('data.index')->with(['error' => 'Data Mahasiswa Gagal Diupdate!']);
    }
}

public function destroy($id)
{
    $data = Data::findOrFail($id);
    Storage::disk('local')->delete('public/datas/'.$data->foto);
    $data->delete();

    if($data){
        return redirect()->route('data.index')->with(['success' => 'Data Mahasiswa Berhasil Dihapus!']);
    }else{
        return redirect()->route('data.index')->with(['error' => 'Data Mahasiswa Gagal Dihapus!']);
    }
}



}
