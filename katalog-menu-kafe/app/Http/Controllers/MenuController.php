<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    // Menampilkan halaman Menu
    public function index()
    {
        return view('menu.index');
    }
}