@extends('layouts.app')

@section('content')
    <h2>Tambah Buku Baru</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <input type="text" name="title">
        <input type="text" name="author">
        <input type="number" name="year">
        <input type="number" name="stock">

        <button type="submit">
            Simpan
        </button>
    </form>
@endsection