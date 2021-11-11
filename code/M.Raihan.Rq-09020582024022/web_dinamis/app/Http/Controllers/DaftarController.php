<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DaftarController extends Controller
{
    // public function index()
    // {
    //     $daftars = Daftar::latest()->paginate(10);
    //     return view(‘daftar.index', compact(daftars'));
    // }
     public function index()
     {
         $daftars = Daftar::latest()->paginate(10);
         return view('daftar.index',compact('daftars'));
     }
}
