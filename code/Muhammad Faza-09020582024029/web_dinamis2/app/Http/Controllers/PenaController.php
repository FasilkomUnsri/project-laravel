<?php

namespace App\Http\Controllers;

use App\Models\Pena;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;

class PenaController extends Controller
{
    public function index()
    {
        $penas = Pena::latest()->paginate(10);
        return view('pena.index',compact('penas'));
        
    }
}
