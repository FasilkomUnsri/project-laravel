<?php

namespace App\Http\Controllers;
use App\Models\Infographic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfographicController extends Controller
{
    //
    public function index()
    {
        $infographics = Infographic::latest()->paginate(10);
        return view('infographic.index', compact('infographics'));
    }

    public function create()
    {
        return view('infographic.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'gambar' => 'required|image|mimes:png,jpg,jpeg',
        'judul' => 'required',
        'isi' => 'required',
        'karya' => 'required'
    ]);

    $gambar = $request->file('gambar');
    $gambar->storeAs('public/infographics', $gambar->hashName());

    $infographic = Infographic::create([
        'gambar' => $gambar->hashName(),
        'judul' => $request->judul,
        'isi' => $request->isi,
        'karya' => $request->karya
    ]);

    if($infographic){
        return redirect()->route('infographic.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        return redirect()->route('infographic.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
    }

    public function edit(Infographic $infographic)
    {
        return view('infographic.edit', compact('infographic'));
    }

    public function update(Request $request, Infographic $infographic)
    {
    $this->validate($request, [
        'judul' => 'required',
        'isi' => 'required',
        'karya' => 'required'
    ]);

    $infographic = Infographic::findOrFail($infographic->id);

    if($request->file('gambar') == "") {

        $infographic->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'karya' => $request->karya
        ]);

    } else {

        Storage::disk('local')->delete('public/infographics/'.$infographic->gambar);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/infographics', $gambar->hashName());

        $infographic->update([
            'gambar' => $gambar->hashName(),
            'judul' => $request->judul,
            'isi' => $request->isi,
            'karya' => $request->karya
        ]);

    }

    if($infographic){
        return redirect()->route('infographic.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        return redirect()->route('infographic.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
    }

    public function destroy($id)
    {
    $infographic = Infographic::findOrFail($id);
    Storage::disk('local')->delete('public/infographics/'.$infographic->gambar);
    $infographic->delete();

    if($infographic){
        return redirect()->route('infographic.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        return redirect()->route('infographic.index')->with(['error' => 'Data Gagal Dihapus!']);
    }
    }
}
