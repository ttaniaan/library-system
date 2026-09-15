<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
    $stock = 7;

    return view('books.index', compact('stock'));
}
}