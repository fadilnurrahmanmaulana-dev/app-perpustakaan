@extends('layouts.app')
@section('title', 'Daftar Anggota')
@section('content')
    <h1>Daftar Anggota</h1>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <a href="{{ route('members.create') }}" class="btn">+ Tambah Anggota</a>
        
        <!-- Form Pencarian -->
        <form action="{{ route('members.index') }}" method="GET" style="display: flex; gap: 8px;">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama anggota..." style="padding: 6px;">
            <button type="submit" class="btn">Cari</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->nim }}</td>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ ucfirst($member->status) }}</td>
                    <td>
                        <a href="{{ route('members.show', $member->id) }}">Detail</a> |
                        <a href="{{ route('members.edit', $member->id) }}">Edit</a> |
                        <form class="inline" action="{{ route('members.destroy', $member->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data anggota / tidak ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pertahankan parameter search saat pindah halaman -->
    {{ $members->appends(request()->query())->links() }}
@endsection