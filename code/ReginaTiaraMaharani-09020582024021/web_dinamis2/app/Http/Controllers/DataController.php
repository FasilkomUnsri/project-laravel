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
            'gambar'     => 'required|image|mimes:png,jpg,jpeg',
            'judul'     => 'required',
            'isi'   => 'required'
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/datas', $gambar->hashName());

        $data = Data::create([
            'gambar'     => $gambar->hashName(),
            'judul'     => $request->judul,
            'isi'   => $request->isi
        ]);

        if ($data) {
            return redirect()->route('data.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('data.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function edit(Data $data)
    {
        return view('data.edit', compact('data'));
    }

    public function update(Request $request, Data $data)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'isi'   => 'required'
        ]);

        $data = Data::findOrFail($data->id);

        if ($request->file('gambar') == "") {

            $data->update([
                'judul'     => $request->judul,
                'isi'   => $request->isi
            ]);
        } else {

            Storage::disk('local')->delete('public/datas/' . $data->gambar);

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/datas', $gambar->hashName());

            $data->update([
                'gambar'     => $gambar->hashName(),
                'judul'     => $request->judul,
                'isi'   => $request->isi
            ]);
        }

        if ($data) {
            return redirect()->route('data.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            return redirect()->route('data.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        Storage::disk('local')->delete('public/datas/' . $data->gambar);
        $data->delete();

        if ($data) {
            return redirect()->route('data.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('data.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
