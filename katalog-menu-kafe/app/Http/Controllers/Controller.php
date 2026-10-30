<?php

namespace App\Http\Controllers;

abstract class Controller
{
    // Menampilkan halaman Beranda
    public function index()
    {
        return view('home');
    }

    // Menampilkan halaman Kategori
    public function kategori()
    {
        return view('kategori');
    }

    // Menampilkan halaman Tentang
    public function tentang()
    {
        return view('tentang');
    }

    // Menampilkan halaman Kontak
    public function kontak()
    {
        return view('kontak');
    }
}
