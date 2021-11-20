<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $this->data['title'] = 'Home';
        return view('home', $this->data);
    }
}
