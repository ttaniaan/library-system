<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        $categories = ['Pemrograman', 'Basis Data', 'Jaringan', 'Sistem Informasi', 'Desain Web'];

        return view('categories.index', compact('categories'));
    }
}
