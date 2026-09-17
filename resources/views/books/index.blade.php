@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <ul>
        @foreach($books as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>
@endsection