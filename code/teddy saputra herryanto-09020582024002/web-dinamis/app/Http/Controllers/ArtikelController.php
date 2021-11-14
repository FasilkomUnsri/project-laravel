<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class ArtikelController extends Controller
{
    public function index()
{
    $artikels = Artikel::latest()->paginate(10);
    return view('artikel.index', compact('artikels'));

}

}
