@extends('layouts.app')
@section('title', 'Edit Anggota')
@section('content')
    <h1>Edit Anggota</h1>
    <p><a href="{{ route('members.index') }}" class="btn">&larr; Kembali ke daftar anggota</a></p>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nama" style="display: block; margin-top: 12px; font-weight: bold;">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $member->nama) }}" style="width: 100%; padding: 6px; margin-top: 4px;">
        
        <label for="nim" style="display: block; margin-top: 12px; font-weight: bold;">NIM</label>
        <input type="text" name="nim" id="nim" value="{{ old('nim', $member->nim) }}" style="width: 100%; padding: 6px; margin-top: 4px;">
        
        <label for="email" style="display: block; margin-top: 12px; font-weight: bold;">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $member->email) }}" style="width: 100%; padding: 6px; margin-top: 4px;">
        
        <label for="nomor_telepon" style="display: block; margin-top: 12px; font-weight: bold;">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon', $member->nomor_telepon) }}" style="width: 100%; padding: 6px; margin-top: 4px;">
        
        <label for="alamat" style="display: block; margin-top: 12px; font-weight: bold;">Alamat</label>
        <textarea name="alamat" id="alamat" rows="3" style="width: 100%; padding: 6px; margin-top: 4px;">{{ old('alamat', $member->alamat) }}</textarea>
        
        <label for="status" style="display: block; margin-top: 12px; font-weight: bold;">Status</label>
        <select name="status" id="status" style="width: 100%; padding: 6px; margin-top: 4px;">
            <option value="aktif" {{ old('status', $member->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ old('status', $member->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>

        <button type="submit" class="btn" style="margin-top: 20px;">Perbarui</button>
    </form>
@endsection