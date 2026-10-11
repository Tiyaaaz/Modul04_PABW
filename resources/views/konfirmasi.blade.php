@extends('layouts.app')

@section('content')
    <x-alert type="success">
        Laporan dari {{ $laporan->nama_pelapor }} di {{ $laporan->lokasi }} berhasil disimpan!
    </x-alert>

    <a href="/daftar-laporan">Lihat Daftar Laporan</a> |
    <a href="/lapor">Kirim Laporan Lagi</a>
@endsection