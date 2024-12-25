<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form Kamar</title>
    <style>
        .form-container {
            max-width: 600px; /* Atur lebar maksimum form */
            margin: 50px auto; /* Pusatkan form secara vertikal dan horizontal */
        }
        .card {
            border-radius: 0.5rem; /* Sudut yang lebih halus */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan untuk efek kedalaman */
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
    <div class="card">
        <div class="card-header">
            <h4 class="mb-0">Form Input Kamar</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('kamar.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_kamar">Nama Kamar</label>
                    <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" required>
                </div>
                <div class="form-group">
                    <label for="fasilitas">Fasilitas</label>
                    <select class="form-control" id="fasilitas" name="fasilitas" required>
                        <option value="kamar mandi dalam">Kamar Mandi Dalam</option>
                        <option value="kamar mandi luar">Kamar Mandi Luar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_gedung">Gedung</label>
                    <select class="form-control" id="id_gedung" name="id_gedung" required>
                        <option value="">Pilih Gedung</option>
                        @foreach ($gedung_kost as $gedung)
                            <option value="{{ $gedung->id_gedung }}">{{ $gedung->nama_gedung }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('kamar') }}" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>