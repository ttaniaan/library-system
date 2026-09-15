<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);

// Router::get('/books, function () {
//      // return 'Daftar Buku';
//      return view('books.index');    
// });

Route::get('/categories', [CategoriesController::class, 'index']);

// Router::get('/categories, function () {
//      // return 'Daftar Categories';
//      return view('categories.index');    
// });

Route::get('/members', [MembersController::class, 'index']);
// Router::get('/members, function () {
//      // return 'Daftar Members';
//      return view('members.index');    
// });

Route::get('/dashboard', [DashboardController::class, 'index']);
// Router::get('/dashboard, function () {
//      // return 'Dashboard';
//      return view('dashboard.index');    
// });

Route::get('/books', [BookController::class, 'show']);

Route::get('/books/{id}', function ($id) {
    return 'Detail Buku' . '<br><br>' . 'ID Buku: ' . $id;
});