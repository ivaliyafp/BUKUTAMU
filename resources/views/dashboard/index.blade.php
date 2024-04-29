<!-- resources/views/dashboard/index.blade.php -->

@extends('layouts.app')

@section('title', 'Dashboard Buku Tamu - Laporan Tamu')

@section('content')
    <h1>Dashboard Buku Tamu - Laporan Tamu</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th>Tujuan</th>
            </tr>
        </thead>
    </table>

    <a href="{{ route('welcome') }}">Kembali ke Beranda</a>
@endsection
