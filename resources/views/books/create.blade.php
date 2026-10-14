@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku Baru</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <p>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ old('author') }}">
            @error('author')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="year" value="{{ old('year') }}">
            @error('year')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <label>Stok Buku:</label><br>
            <input type="number" name="stock" value="{{ old('stock') }}">
            @error('stock')
                <br><span>{{ $message }}</span>
            @enderror
        </p>

        <p>
            <button type="submit">Simpan Data</button>
            <a href="{{ route('books.index') }}">Batal</a>
        </p>
    </form>
@endsection