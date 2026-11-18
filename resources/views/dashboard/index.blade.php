@extends('layouts.app')

@section('Dashboard')

@section('content')
    <center>
        <h1>Dashboard</h1>
        <p>Halo, {{ auth()->user()->name }} ({{ auth()->user()->role }})</p>
    </center>

    <h2>Ringkasan Data</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Total Kategori</th>
            <td>{{ $totalCategories }}</td>
        </tr>
        <tr>
            <th>Total Buku</th>
            <td>{{ $totalBooks }}</td>
        </tr>
        <tr>
            <th>Total Anggota</th>
            <td>{{ $totalMembers }}</td>
        </tr>
        <tr>
            <th>Total Transaksi Peminjaman</th>
            <td>{{ $totalBorrowings }}</td>
        </tr>
        <tr>
            <th>Peminjaman Masih Berjalan</th>
            <td>{{ $activeBorrowings }}</td>
        </tr>
    </table>
@endsection