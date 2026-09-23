<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            ['title' => 'Pemrograman PHP', 'author' => 'Andi', 'year' => 2024, 'stock' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Blockchain', 'author' => 'Harris', 'year' => 2026, 'stock' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Data Analyst', 'author' => 'Gin', 'year' => 2023, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'UI/UX', 'author' => 'Mika', 'year' => 2025, 'stock' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Pemrograman Web', 'author' => 'Noy', 'year' => 2026, 'stock' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}