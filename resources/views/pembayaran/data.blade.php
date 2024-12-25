@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')

<br>
<div class="container">
    <h2 class="mb-4">Tabel Pembayaran</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="tabel-pembayaran">
            <thead class="thead-dark">
                <tr>
                    <th style="width:1%">No.</th>
                    <th style="width:5%">Nama Penghuni</th>
                    <th style="width:5%">Kamar</th>
                    <th style="width:5%">Bulan</th>
                    <th style="width:5%">Status</th>
                    <th style="width:5%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayaran as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ optional($data->penghuni)->nama_penghuni }}</td>
                    <td>{{ optional($data->kamar)->nama_kamar }}</td>
                    <td>{{ $data->bulan }}</td>
                    <td>{{ $data->status }}</td>
                    <td>
                        <form action="{{ route('pembayaran.update', $data->id_pembayaran) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-info text-white"><i class="fas fa-check"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-start">
            <a href="{{ url('/beranda/pembayaran') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
