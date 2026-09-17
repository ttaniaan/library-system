<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
    $books = [
        'Pemrograman PHP',
        'Laravel untuk Pemula',
        'Basis Data',
        'Algoritma dan Pemrograman',
        'Pemrograman Berorientasi Objek',
        'Struktur Data',
        'Jaringan Komputer',
        'Rekayasa Perangkat Lunak'
    ];

    return view('books.index', compact('books'));
    } 
}