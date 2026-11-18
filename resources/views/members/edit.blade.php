@extends('layouts.app')

@section('title', 'Data Member')

@section('content')
    <h2>Edit Data Anggota</h2>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="member_code">Kode Anggota:</label><br>
            <input type="text" name="member_code" id="member_code" value="{{ old('member_code', $member->member_code) }}" required>
        </div>
        <br>

        <div>
            <label for="name">Nama Lengkap:</label><br>
            <input type="text" name="name" id="name" value="{{ old('name', $member->name) }}" required>
        </div>
        <br>

        <div>
            <label for="phone">No. Telepon:</label><br>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $member->phone) }}" required>
        </div>
        <br>

        <div>
            <label for="address">Alamat:</label><br>
            <textarea name="address" id="address" rows="3" required>{{ old('address', $member->address) }}</textarea>
        </div>
        <br>

        <button type="submit">Update</button>
    </form>
    
    <br><br>
    <a href="{{ route('members.index') }}"><center>Kembali ke Daftar Anggota</center></a>
@endsection