<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PerpustakaanController extends Controller
{
    public function index()
{
    $perpustakaans = Perpustakaan::latest()->paginate(10);
    return view('perpustakaan.index', compact('perpustakaans'));
}

public function create()
{
    return view('perpustakaan.create');
}

public function store(Request $request)
{
    $this->validate($request, [
        'tanggal'     => 'required', 
        'nama'     => 'required',
        'keperluan'   => 'required',
        'buktiBerkunjung'     => 'required|image|mimes:png,jpg,jpeg'
       
    ]);

    $buktiBerkunjung = $request->file('buktiBerkunjung');
    $buktiBerkunjung->storeAs('public/perpustakaans', $buktiBerkunjung->hashName());

    $perpustakaan = Perpustakaan::create([
        'tanggal'     => $request->tanggal,
        'nama'     => $request->nama,
        'keperluan'   => $request->keperluan,
        'buktiBerkunjung'     => $buktiBerkunjung->hashName()
        
    ]);

    if($perpustakaan){
        return redirect()->route('perpustakaan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        return redirect()->route('perpustakaan.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function edit(Perpustakaan $perpustakaan)
{
    return view('perpustakaan.edit', compact('perpustakaan'));
}

public function update(Request $request, Perpustakaan $perpustakaan)
{
    $this->validate($request, [
        'tanggal'     => 'required',
        'nama'     => 'required',
        'keperluan'   => 'required'
    ]);

    $perpustakaan = Perpustakaan::findOrFail($perpustakaan->id);

    if($request->file('buktiBerkunjung') == "") {

        $perpustakaan->update([
            'tanggal'     => $request->tanggal,
            'nama'     => $request->nama,
            'keperluan'   => $request->keperluan
        ]);

    } else {

        Storage::disk('local')->delete('public/perpustakaans/'.$perpustakaan->buktiBerkunjung);

        $buktiBerkunjung = $request->file('buktiBerkunjung');
        $buktiBerkunjung->storeAs('public/perpustakaans', $buktiBerkunjung->hashName());

        $perpustakaan->update([
            'tanggal'   => $request->tanggal,
            'nama'     => $request->nama,
            'keperluan'   => $request->keperluan,
            'buktiBerkunjung'     => $buktiBerkunjung->hashName(),
        ]);

    }

    if($perpustakaan){
        return redirect()->route('perpustakaan.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        return redirect()->route('perpustakaan.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy($id)
{
    $perpustakaan = Perpustakaan::findOrFail($id);
    Storage::disk('local')->delete('public/perpustakaans/'.$perpustakaan->buktiBerkunjung);
    $perpustakaan->delete();

    if($perpustakaan){
        return redirect()->route('perpustakaan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('perpustakaan.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
}






    //
}
