@extends('layouts.app')

@section('title', 'Data Peminajman')

@section('content')
    <h2><center>Daftar Transaksi Peminjaman</center></h2>

    <a href="{{ route('borrowings.create') }}">+ Tambah Peminjaman</a>

    <br><br>

    @if(session('success'))
        <p><strong>{{ session('success') }}</strong></p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Anggota</th>
                <th>Buku (Jumlah)</th>
                <th>Petugas</th>
                <th>Tgl Pinjam</th>
                <th>Jatuh Tempo</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($borrowings as $index => $borrowing)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $borrowing->member->name }}</td>
                    <td>
                        <ul>
                            @foreach($borrowing->details as $detail)
                                <li>{{ $detail->book->title }} ({{ $detail->quantity }})</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $borrowing->user->name }}</td>
                    <td>{{ $borrowing->borrowing_date }}</td>
                    <td>{{ $borrowing->due_date }}</td>
                    <td>{{ $borrowing->return_date ?? '-' }}</td>
                    <td>{{ $borrowing->status }}</td>
                    <td>
                        @if($borrowing->status === 'borrowed')
                            <form action="{{ route('borrowings.return', $borrowing->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" onclick="return confirm('Proses pengembalian buku ini?')">
                                    Kembalikan
                                </button>
                            </form>
                        @else
                            Selesai
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">Belum ada data peminjaman.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection