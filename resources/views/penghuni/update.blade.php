@extends('layouts.master')
@section('title', 'Edit Data Penghuni')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Edit Data Penghuni</h4>
            <br>
            <form action="{{ route('penghuni.update', $penghuni->id_penghuni) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_penghuni">Nama Penghuni <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_penghuni" id="nama_penghuni" 
                           value="{{ $penghuni->nama_penghuni }}" required>
                </div>

                <div class="form-group">
                    <label for="nik">NIK <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nik" id="nik" 
                           value="{{ $penghuni->nik }}" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3" required>{{ $penghuni->alamat }}</textarea>
                </div>

                <div class="form-group">
                    <label for="id_kamar">Kamar <span class="text-danger">*</span></label>
                    <select class="form-control" id="id_kamar" name="id_kamar" required>
                        @foreach ($kamar_kost as $kamar)
                            <option value="{{ $kamar->id }}" 
                                    {{ $kamar->id == $penghuni->id_kamar ? 'selected' : '' }}>
                                {{ $kamar->nama_kamar }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('penghuni.index') }}" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
