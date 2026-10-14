@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Data Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ old('title', $book->title) }}">
            @error('title')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ old('author', $book->author) }}">
            @error('author')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" value="{{ old('year', $book->year) }}">
            @error('year')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Stok Buku:</label><br>
            <input type="number" name="stock" value="{{ old('stock', $book->stock) }}">
            @error('stock')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <button type="submit">Update Data</button>
            <a href="{{ route('books.index') }}">Batal</a>
        </p>
    </form>
@endsection