<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller {
    public function index()
    {
        $books = [
            ['judul' => 'Pemrograman PHP', 'penulis' => 'Harris', 'tahunTerbit' => 2020],
            ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Arion', 'tahunTerbit' => 2021],
            ['judul' => 'Basis Data Modern', 'penulis' => 'Gehenna', 'tahunTerbit' => 2019],
            ['judul' => 'Algoritma & Struktur Data', 'penulis' => 'Noyi', 'tahunTerbit' => 2022],
            ['judul' => 'Pemrograman Web Framework', 'penulis' => 'Nasi', 'tahunTerbit' => 2023],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id) 
    {
    return view('books.show', compact('id'));
    }
}

