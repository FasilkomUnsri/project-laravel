<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin(){
        $this->data['title'] = 'Halaman Admin';
        return view('page.admin', $this->data);
    }

    public function mahasiswa(){
        $this->data['title'] = 'Halaman Mahasiswa';
        return view('page.mahasiswa', $this->data);
    }

    public function dosen(){
        $this->data['title'] = 'Halaman Dosen';
        return view('page.dosen', $this->data);
    }
}
