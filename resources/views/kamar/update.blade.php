@extends('layouts.master')

@section('title', 'Aplikasi Laravel')

@section('content')
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Edit Data Kamar</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('kamar.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Menambahkan metode PUT untuk update -->
                        <div class="form-group">
                            <label for="nama_kamar">Nama Kamar <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="nama_kamar" id="nama_kamar" 
                            value="{{ $data->nama_kamar }}" required>
                        </div>
                        <div class="form-group">
                            <label for="fasilitas">Fasilitas</label>
                            <select class="form-control" id="fasilitas" name="fasilitas" required>
                                <option value="kamar mandi dalam" {{ $data->fasilitas == 'kamar mandi dalam' ? 'selected' : '' }}>
                                    Kamar Mandi Dalam
                                </option>
                                <option value="kamar mandi luar" {{ $data->fasilitas == 'kamar mandi luar' ? 'selected' : '' }}>
                                    Kamar Mandi Luar
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_gedung">Gedung</label>
                            <select class="form-control" id="id_gedung" name="id_gedung" required>
                                @foreach ($gedung as $ged)
                                    <option value="{{ $ged->id_gedung }}" {{ $ged->id_gedung == $data->id_gedung ? 'selected' : '' }}>
                                        {{ $ged->nama_gedung }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary mr-2">Ubah</button>
                            <a href="{{ url('/kamar') }}" class="btn btn-success">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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
</style>

@endsection