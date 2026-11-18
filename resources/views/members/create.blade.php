@extends('layouts.app')

@section('title', 'Data Member')

@section('content')
    <h2>Tambah Anggota Baru</h2>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('members.store') }}" method="POST">
        @csrf

        <div>
            <label for="member_code">Kode Anggota:</label><br>
            <input type="text" name="member_code" id="member_code" value="{{ old('member_code') }}" placeholder="Contoh: AGT-001" required>
        </div>
        <br>

        <div>
            <label for="name">Nama Lengkap:</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <br>

        <div>
            <label for="phone">No. Telepon:</label><br>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required>
        </div>
        <br>

        <div>
            <label for="address">Alamat:</label><br>
            <textarea name="address" id="address" rows="3" required>{{ old('address') }}</textarea>
        </div>
        <br>

        <button type="submit">Simpan</button>
    </form>

    <br><br>
    <a href="{{ route('members.index') }}"><center>Kembali ke Daftar Anggota</center></a>
@endsection