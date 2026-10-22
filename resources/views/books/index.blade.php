@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    
    <h2>Daftar Buku</h2>

    <a href="{{ route('books.create') }}">Tambah Buku Baru</a>

    @foreach($books as $book)
        <p>
            <h3>{{ $book->title }} - {{ $book->author }} ({{ $book->year }}) 
            <small style= "color: grey"> (Kategori: {{ $book->category?->name ?? "Belum ada Kategori" }})</small>
            <br>[Stok: {{ $book->stock }}]</br>

            </h3>
            
            <a href="{{ route('books.edit', $book) }}">Edit Buku</a><br>
            <a href="{{ route('books.show', $book) }}">Detail Buku</a>

            <!-- Form Delete -->
            <form 
                action="{{ route('books.destroy', $book) }}" 
                method="POST"
            >
                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>
            </form>
        </p>
    @endforeach
@endsection