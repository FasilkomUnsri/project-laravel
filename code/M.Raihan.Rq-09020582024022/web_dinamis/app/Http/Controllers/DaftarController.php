<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DaftarController extends Controller
{
     public function index()
     {
         $daftars = Daftar::latest()->paginate(10);
         return view('daftar.index',compact('daftars'));
     }

    public function create()
    {
        return view('daftar.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'tgl_lahir' =>'required',
            'jurusan'=>'required',
            'fhoto' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $fhoto = $request->file('fhoto');
        $fhoto -> storeAs('public/daftars', $fhoto->hashName());

        $daftar = Daftar::create([
            'nama' => $request->nama,
            'tgl_lahir'  =>$request->tgl_lahir,
            'jurusan'  =>$request->jurusan,
            'fhoto'  =>$fhoto->hashName()
        ]);

        if ($daftar) {
            return redirect()->route('daftar.index')->with(['success'=>'Data Berhasil Ditambahkan']);
        }else{
            return redirect()->route('daftar.index')->with(['error'=>'Data Gagal Ditambahkan']);
        }
    }

    public function edit(Daftar $daftar)
{
    return view('daftar.edit', compact('daftar'));
}

public function update(Request $request, Daftar $daftar)
{
    $this->validate($request, [
        'nama'     => 'required',
        'tgl_lahir'   => 'required',
        'jurusan'   => 'required'
    ]);

    $daftar = Daftar::findOrFail($daftar->id);

    if($request->file('fhoto') == "") {

        $daftar->update([
            'nama'     => $request->nama,
            'tgl_lahir'   => $request->tgl_lahir,
            'jurusan'   => $request->jurusan
        ]);

    } else {

        Storage::disk('local')->delete('public/daftars/'.$daftar->fhoto);

        $fhoto = $request->file('fhoto');
        $fhoto->storeAs('public/daftars', $fhoto->hashName());

        $daftar->update([
            'nama' => $request->nama,
            'tgl_lahir'     => $request->tgl_lahir,
            'jurusan'   => $request->jurusan,
            'fhoto'     => $fhoto->hashName()
        ]);

    }

    if($daftar){
        return redirect()->route('daftar.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        return redirect()->route('daftar.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function destroy($id)
{
    $daftar = Daftar::findOrFail($id);
    Storage::disk('local')->delete('public/daftars/'.$daftar->fhoto);
    $daftar->delete();

    if($daftar){
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('artikel.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
}


}
