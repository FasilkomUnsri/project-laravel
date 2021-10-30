<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
{
    $artikels = Artikel::latest()->paginate(10); //pagi yg bisa untuk tampil
    return view('artikel.index', compact('artikels'));


}

}
