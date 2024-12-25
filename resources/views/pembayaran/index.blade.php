@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<br>
<div class="container">
    <h2 class="mb-4">Data Pembayaran</h2>
    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mb-3">Tambah Pembayaran</a>
    
    <form action="{{ url('/data-pembayaran') }}" class="row g-3 align-items-center" method="GET">
    @csrf
    <div class="col-md-12 d-flex align-items-center">
        <label for="bulan" class="form-label fw-bold" style="width: 100px;">Bulan</label>
        <select id="bulan" name="bulan" class="form-select" style="width: 40%;">
            <option selected>-- Pilih Bulan --</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
    </div>

    <div class="col-md-12 d-flex align-items-center">
        <label for="tahun" class="form-label fw-bold" style="width: 100px;">Tahun</label>
        <select id="tahun" name="tahun" class="form-select" style="width: 40%;">
            <option selected>-- Pilih Tahun --</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
        </select>
    </div>

    <div class="col-md-3 align-self-end">
        <button type="submit" class="btn btn-success" style="width: 70%;">Lihat Data Pembayaran</button>
    </div>
</form>


</div>
@endsection
