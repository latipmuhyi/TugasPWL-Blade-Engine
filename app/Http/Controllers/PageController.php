<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function picture()
    {
        return view('picture');
    }
    public function profil()
    {
        return view('profil');
    }
}
