@extends('layouts.master')

@section('title', 'Aplikasi Laravel')

@section('content')
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Edit Data Gedung</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('gedung.update', $data->id_gedung) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_gedung">ID Gedung <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="id_gedung" id="id_gedung" 
                            value="{{ $data->id_gedung }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_gedung">Nama Gedung <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="nama_gedung" id="nama_gedung" 
                            value="{{ $data->nama_gedung }}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            <a href="{{ url('/gedung') }}" class="btn btn-success">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Gaya untuk card */
    .card {
        margin-top: 20px; /* Jarak atas untuk card */
        border-radius: 0.5rem; /* Sudut yang lebih halus */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
    }

    .card-header {
        background-color: #343a40; /* Warna latar belakang header card */
        color: white; /* Warna teks header card */
        text-align: center; /* Pusatkan teks header */
    }

    /* Gaya untuk form */
    h4 {
        margin: 0; /* Menghilangkan margin default */
    }

    .form-group {
        margin-bottom: 15px; /* Jarak bawah untuk setiap grup form */
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

    .btn-success {
        background-color: #28a745; /* Warna hijau */
        border-color: #28a745; /* Border hijau */
    }

    .btn-success:hover {
        background-color: #218838; /* Warna hijau gelap saat hover */
        border-color: #1e7e34; /* Border hijau gelap saat hover */
    }
</style>
@endsection