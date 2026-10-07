@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku (Database)</h2>

    <a href="{{ route('books.create') }}">Tambah Buku Baru</a>

    @foreach($books as $book)
        <p>
            {{ $book->title }} - {{ $book->author }} ({{ $book->year }}) [Stok: {{ $book->stock }}]
            <a href="{{ route('books.edit', $book) }}">Edit</a>

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