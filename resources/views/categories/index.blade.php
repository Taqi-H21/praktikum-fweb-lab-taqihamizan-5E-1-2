@extends('layouts.app')

@section('content')
    <h2>Daftar Kategori</h2>
    <p>Ini adalah isi konten yang menyuntikkan data ke @yield('content').</p>
@endsection

{{-- Menggunakan komponen tipe Success --}}
<x-alert type="success">
    Data kategori berhasil ditambahkan ke database!
</x-alert>

{{-- Menggunakan komponen tipe Danger --}}
<x-alert type="danger">
    Gagal menghapus data kategori!
</x-alert>