@extends('layouts.master')

@section('title', 'Aplikasi Laravel')

@section('content')
<br>
<br>
<br>

<div class="container">
    <h2 class="mb-4">Tabel Kamar</h2>
    <a href="{{ route('kamar.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="tabel-produk">
            <thead class="thead-dark">
                <tr>
                    <th style="width:1%">No.</th>
                    <th style="width:5%">Nama Kamar</th>
                    <th style="width:5%">Fasilitas</th>
                    <th style="width:5%">Gedung ID</th>
                    <th style="width:5%">Gedung</th>
                    <th style="width:5%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataKamar as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_kamar }}</td>
                    <td>{{ $data->fasilitas }}</td>
                    <td>{{ optional($data->gedung)->id_gedung }}</td>
                    <td>{{ optional($data->gedung)->nama_gedung }}</td>
                    <td>
                        <form action="{{ route('kamar.delete', $data->id) }}" method="post" style="display:inline;">
                            @csrf
                            <a href="{{ route('kamar.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kamar ini?');">Delete</button>
                        </form>
                    </td>
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