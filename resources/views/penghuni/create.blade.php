<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form Input Penghuni</title>
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px; /* Jarak bawah untuk setiap grup form */
        }

        .btn-primary {
            background-color: #007bff; /* Warna biru */
            border-color: #007bff; /* Border biru */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Warna biru gelap saat hover */
            border-color: #0056b3; /* Border biru gelap saat hover */
        }

        /* Gaya untuk judul */
        h4 {
            color: #ffffff; /* Warna biru gelap untuk judul */
            text-align: center; /* Pusatkan teks judul */
        }
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
</head>
<body>

<div class="form-container">
    <div class="card-header">
        <h4 class="mb-0">Form Input Data Gedung</h4>
    </div>
    <form action="{{ route('penghuni.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_penghuni">Nama Penghuni</label>
            <input type="text" class="form-control" id="nama_penghuni" name="nama_penghuni" required>
        </div>

        <div class="form-group">
            <label for="NIK">NIK</label>
            <input type="text" class="form-control" id="NIK" name="nik" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="id_kamar">Kamar</label>
            <select class="form-control" id="id_kamar" name="id_kamar" required>
                <option value="">Pilih Kamar</option>
                @foreach ($kamar_kost as $kamar)
                    <option value="{{ $kamar->id }}">{{ $kamar->nama_kamar }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('penghuni') }}" class="btn btn-success">Kembali</a>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min .js"></script>
</body>
</html>