@extends('layouts.master')

@section('title', 'Aplikasi Laravel')

@section('content')


<br>
<br>
<br>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg text-black">
                    <h4 class="mb-0 text-center">FORMULIR SEWA</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="/submit-data">
                        @csrf <!-- Add CSRF protection token -->
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin:</label>
                            <select class="form-control" id="gender" name="gender" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job">Pekerjaan:</label>
                            <input type="text" class="form-control" id="job" name="job">
                        </div>
                        <div class="form-group">
                            <label for="status">Status Pernikahan:</label>
                            <select class="form-control" id="status" name="status">
                                <option value="belum menikah">Belum Menikah</option>
                                <option value="menikah">Menikah</option>
                                <option value="janda/duda">Janda/Duda</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="phone">No HP:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
