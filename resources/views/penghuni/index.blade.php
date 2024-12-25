@extends('layouts.master')

@section('title', 'Aplikasi Laravel')

@section('content')
<br>
<br>
<div class="container">
    <h2 class="mb-4">Tabel Penghuni</h2>
    <a href="{{ route('penghuni.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="tabel-penghuni">
            <thead class="thead-dark">
                <tr>
                    <th style="width:1%">No.</th>
                    <th style="width:5%">Nama Penghuni</th>
                    <th style="width:5%">NIK</th>
                    <th style="width:5%">Alamat</th>
                    <th style="width:5%">Kamar</th>
                    <th style="width:5%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPenghuni as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_penghuni }}</td>
                    <td>{{ $data->nik }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ optional($data->kamar)->nama_kamar ?? 'Belum Ada' }}</td>
                    <td>
                        <form action="{{ route('penghuni.delete', $data->id_penghuni) }}" method="POST" style="display:inline;">
                            @csrf
                            <a href="{{ route('penghuni.edit', $data->id_penghuni) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus penghuni ini?');">Delete</button>
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
    #tabel-penghuni {
        border-radius: 0.5rem;
        overflow: hidden;
    }

    #tabel-penghuni th {
        background-color: #343a40; /* Warna latar belakang header */
        color: white; /* Warna teks header */
        text-align: center; /* Pusatkan teks header */
    }

    #tabel-penghuni td {
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