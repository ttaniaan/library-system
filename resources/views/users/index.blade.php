@extends('layouts.app')

@section('title', 'Daftar Member')

@section('content')

    <h1>Daftar Pengguna</h1>

    {{-- Tabel Data User --}}
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $user)
                <tr>
                    <td>{{ $users->firstItem() + $index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Navigasi Pagination --}}
    <div>
        {{ $users->links() }}
    </div>

@endsection