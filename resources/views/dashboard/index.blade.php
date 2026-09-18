@extends('layouts.app')

@section('title', 'Dashboard - Library System')

@section('content')
    <p>{{ $description }}</p>

    <hr>

    <h3>Statistik Perpustakaan:</h3>
    <ul>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Member: {{ $totalMembers }}</li>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
    </ul>
@endsection