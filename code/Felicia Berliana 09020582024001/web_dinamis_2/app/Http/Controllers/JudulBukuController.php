<?php

namespace App\Http\Controllers;

use App\Models\JudulBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JudulBukuController extends Controller
{
    public function index()
    {
        $judulbukus = JudulBuku::latest()->paginate(10);
        return view('judulbuku.index', compact('judulbukus'));
    }
}