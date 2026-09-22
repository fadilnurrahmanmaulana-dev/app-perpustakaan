@extends('layouts.app')
@section('title', 'Tambah Anggota')
@section('content')
    <h1>Tambah Anggota</h1>
    <p><a href="{{ route('members.index') }}" class="btn">&larr; Kembali ke daftar anggota</a></p>

    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <label for="nama" style="display: block; margin-top: 12px; font-weight: bold;">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" style="width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box;">
        
        <label for="nim" style="display: block; margin-top: 12px; font-weight: bold;">NIM</label>
        <input type="text" name="nim" id="nim" value="{{ old('nim') }}" style="width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box;">
        
        <label for="email" style="display: block; margin-top: 12px; font-weight: bold;">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" style="width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box;">
        
        <label for="nomor_telepon" style="display: block; margin-top: 12px; font-weight: bold;">Nomor Telepon</label>
        <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon') }}" style="width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box;">
        
        <label for="alamat" style="display: block; margin-top: 12px; font-weight: bold;">Alamat</label>
        <textarea name="alamat" id="alamat" rows="3" style="width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box;">{{ old('alamat') }}</textarea>
        
        <label for="status" style="display: block; margin-top: 12px; font-weight: bold;">Status</label>
        <select name="status" id="status" style="width: 100%; padding: 6px; margin-top: 4px; box-sizing: border-box;">
            <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ old('status') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>

        @if($errors->any())
            <div style="color: #b91c1c; margin-top: 10px;">Mohon periksa kembali inputan Anda.</div>
        @endif

        <button type="submit" class="btn" style="margin-top: 20px;">Simpan</button>
    </form>
@endsection