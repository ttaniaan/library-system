<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MembersController;

Route::get('/', function () {
    return view('welcome');
});

// Router::get('/books, function () {
//      // return 'Daftar Buku';
//      return view('books.index');    
// });

Route::get('/books', [BookController::class, 'index']);

// Router::get('/categories, function () {
//      // return 'Daftar Categories';
//      return view('categories.index');    
// });

Route::get('/categories', [CategoriesController::class, 'index']);

// Router::get('/members, function () {
//      // return 'Daftar Members';
//      return view('members.index');    
// });

Route::get('/members', [MembersController::class, 'index']);
