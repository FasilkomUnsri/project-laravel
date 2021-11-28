<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('pegawai.index',compact('pegawais'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'tglahir' => 'required'
        ]);
        $pegawai = Pegawai::create([
            'nama' =>$request->nama,
            'alamat' =>$request->alamat,
            'tglahir' =>$request->tglahir
        ]);
        if($pegawai){
            return redirect()->route('pegawai.index')->with(['success'=>'Data Berhasil Disimpan']);
        }else{
            return redirect()->route('pegawai.index')->with(['error'=>'Data Gagal Disimpan']);
        }
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit',compact('pegawai'));
    }

    public function update(Request $request,Pegawai $pegawai)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'tglahir' => 'required'
        ]);

        $pegawai = Pegawai::findOrFail($pegawai->id);

        $pegawai->update([
            'nama' =>$request->nama,
            'alamat' =>$request->alamat,
            'tglahir' =>$request->tglahir
        ]);

        if($pegawai){
            return redirect()->route('pegawai.index')->with(['success'=>'Data Berhasil Disimpan']);
        }else{
            return redirect()->route('pegawai.index')->with(['error'=>'Data Gagal Disimpan']);
        }
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        if($pegawai){
            return redirect()->route('pegawai.index')->with(['success'=>'Data Berhasil Disimpan']);
        }else{
            return redirect()->route('pegawai.index')->with(['error'=>'Data Gagal Disimpan']);
        }
    }
}

