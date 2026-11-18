@extends('layouts.app')

@section('title', 'Data Peminjaman')

@section('content')
    <h2><center>Form Peminjaman Buku</center></h2>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('borrowings.store') }}" method="POST">
        @csrf

        <div>
            <label for="member_id">Anggota:</label><br>
            <select name="member_id" id="member_id" required>
                <option value="">-- Pilih Anggota --</option>
                @foreach($members as $member)
                    <option value="{{ $member->id }}" {{ old('member_id') == $member->id ? 'selected' : '' }}>
                        {{ $member->member_code }} - {{ $member->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <br>

        <div>
            <label for="book_id">Buku:</label><br>
            <select name="book_id" id="book_id" required>
                <option value="">-- Pilih Buku --</option>
                @foreach($books as $book)
                    <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}>
                        {{ $book->title }} (Stok: {{ $book->stock }})
                    </option>
                @endforeach
            </select>
        </div>
        <br>

        <div>
            <label for="quantity">Jumlah Pinjam:</label><br>
            <input type="number" name="quantity" id="quantity" min="1" value="{{ old('quantity', 1) }}" required>
        </div>
        <br>

        <button type="submit">Simpan</button>
    </form>

    <br><br>
    <a href="{{ route('borrowings.index') }}"><center>Kembali ke Daftar Peminjaman</center></a>
@endsection