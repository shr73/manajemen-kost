@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
    <h2 class="mb-4">Tabel Status Pembayaran Penghuni</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="tabel-status">
            <thead class="thead-dark">
                <tr>
                    <th style="width:1%">No.</th>
                    <th style="width:5%">Nama Penghuni</th>
                    <th style="width:5%">Id Penghuni</th>
                    <th style="width:5%">Nama Kamar</th>
                    <th style="width:5%">Id Pembayaran</th>
                    <th style="width:5%">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataCari as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ optional($data->penghuni)->nama_penghuni }}</td>
                    <td>{{ optional($data->penghuni)->id_penghuni }}</td>
                    <td>{{ optional($data->kamar)->nama_kamar}}</td>
                    <td>{{ optional($data->pembayaran)->id_pembayaran }}</td>
                    <td>{{ optional($data->pembayaran)->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    /* Gaya untuk tabel */
    #tabel-produk {
        border-radius: 0.5rem;
        overflow: hidden;
    }

    #tabel-produk th {
        background-color: #343a40; /* Warna latar belakang header */
        color: white; /* Warna teks header */
        text-align: center; /* Pusatkan teks header */
    }

    #tabel-produk td {
        text-align: center; /* Pusatkan teks sel */
    }

    /* Gaya untuk tombol */
    .btn-primary {
        background-color: #007bff; /* Warna biru */
        border-color: #007bff; /* Border biru */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Warna biru gelap saat hover */
        border-color: #0056b3; /* Border biru gelap saat hover */
    }

    .btn-warning {
        background-color: #ffc107; /* Warna kuning */
        border-color: #ffc107; /* Border kuning */
    }

    .btn-warning:hover {
        background-color: #e0a800; /* Warna kuning gelap saat hover */
        border-color: #d39e00; /* Border kuning gelap saat hover */
    }

    .btn-danger {
        background-color: #dc3545; /* Warna merah */
        border-color: #dc3545; /* Border merah */
    }

    .btn-danger:hover {
        background-color: #c82333; /* Warna merah gelap saat hover */
        border-color: #bd2130; /* Border merah gelap saat hover */
    }
</style>
@endsection