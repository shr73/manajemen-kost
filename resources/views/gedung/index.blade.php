@extends('layouts.master')

@section('title', 'Aplikasi Laravel')

@section('content')
<br>
<br>
<div class="container">
    <h2 class="mb-4">Tabel Gedung</h2>
    <a href="{{ route('gedung.create') }}" class="btn btn-success mb-3">Tambah Data</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="tabel-kategori">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 1%">No.</th>
                    <th style="width: 5%">ID Gedung</th>
                    <th style="width: 5%">Nama Gedung</th>
                    <th style="width: 5%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataGedung as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->id_gedung }}</td>
                    <td>{{ $data->nama_gedung }}</td>
                    <td>
                        <form action="{{ route('gedung.delete', $data->id_gedung) }}" method="post" style="display:inline;">
                            @csrf
                            <a href="{{ route('gedung.edit', $data->id_gedung) }}" class="btn btn-warning btn-sm" title="Edit Gedung">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus gedung ini?');" title="Hapus Gedung">Delete</button>
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
    #tabel-kategori {
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan untuk efek kedalaman */
    }

    #tabel-kategori th {
        background-color: #343a40; /* Warna latar belakang header */
        color: white; /* Warna teks header */
        text-align: center; /* Pusatkan teks header */
        padding: 10px; /* Tambahkan padding untuk header */
    }

    #tabel-kategori td {
        text-align: center; /* Pusatkan teks sel */
        padding: 10px; /* Tambahkan padding untuk sel */
    }

    /* Gaya untuk tombol */
    .btn-success {
        background-color: #28a745; /* Warna hijau */
        border-color: #28a745; /* Border hijau */
    }

    .btn-success:hover {
        background-color: #218838; /* Warna hijau gelap saat hover */
        border-color: #1e7e34; /* Border hijau gelap saat hover */
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

    /* Gaya untuk tombol kecil */
    .btn-sm {
        padding: 0.25rem 0.5rem; /* Padding untuk tombol kecil */
        font-size: 0.875rem; /* Ukuran font untuk tombol kecil */
    }
</style>
@endsection