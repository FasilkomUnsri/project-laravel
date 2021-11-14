<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(10);
        return view('mahasiswa.index', compact('mahasiswas'));
    }
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
        'gambar'     => 'required|image|mimes:png,jpg,jpeg',
        'nama'     => 'required',
        'jurusan'   => 'required',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/mahasiswa', $gambar->hashName());

        $mahasiswa = Mahasiswa::create([
            'gambar'     => $gambar->hashName(),
            'nama'     => $request->nama,
            'jurusan'   => $request->jurusan
        
        ]);

        if($mahasiswa){
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('mahasiswa.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function edit( Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'jurusan'   => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($mahasiswa->id);

        if($request->file('gambar') == "") {

            $mahasiswa->update([
                'nama'     => $request->nama,
                'jurusan'   => $request->jurusan
            ]);

        } else {

            Storage::disk('local')->delete('public/mahasiswa/'.$mahasiswa->gambar);

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/mahasiswa', $gambar->hashName());

            $mahasiswa->update([
            'gambar'     => $gambar->hashName(),
            'nama'     => $request->nama,
            'jurusan'   => $request->jurusan
            ]);

        }

        if($mahasiswa){
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('mahasiswa.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        Storage::disk('local')->delete('public/mahasiswa/'.$mahasiswa->gambar);
        $mahasiswa->delete();

        if($mahasiswa){
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('mahasiswa.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

}