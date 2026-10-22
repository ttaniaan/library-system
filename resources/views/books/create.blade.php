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

        <label for="category_id">Kategori</label>

        <select name="category_id" id='category_id'>
            <option value="">Pilih Kategori</option>

            @foreach ($categories as $category)
                <option
                    value="{{ $category->id }}"
                    @selected(old('category_id') == $category->id)
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p>{{ $message }}</p>
        @enderror
        
        <p>
            <button type="submit">Simpan Data</button>
            <a href="{{ route('books.index') }}">Batal</a>
        </p>
    </form>
@endsection