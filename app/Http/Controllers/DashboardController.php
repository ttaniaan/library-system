<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Library System';
        $description = 'Selamat Datang di Perpustakaan Digital';
        $totalBooks = 8;
        $totalMembers = 12;
        $totalCategories = 4;

        return view('dashboard.index', compact (
            'title', 
            'description', 
            'totalBooks', 
            'totalMembers', 
            'totalCategories'
        ));
    }
}