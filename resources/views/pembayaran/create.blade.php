<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form Pembayaran</title>
    <style>
        .form-container {
            max-width: 600px; /* Atur lebar maksimum form */
            margin: 50px auto; /* Pusatkan form secara vertikal dan horizontal */
            padding: 20px; /* Tambahkan padding di dalam form */
            border: 1px solid #ccc; /* Tambahkan border */
            border-radius: 5px; /* Tambahkan sudut melengkung */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
        }
    </style>
</head>
<body>

<div class="form-container">
    <!-- Tambahkan pengecekan error sebelum form -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Pembayaran -->
    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_penghuni">Nama Penghuni</label>
            <select class="form-control" id="id_penghuni" name="id_penghuni" required>
                <option value="">Pilih Penghuni</option>
                @foreach ($penghunis as $penghuni)
                    <option value="{{ $penghuni->id_penghuni }}">{{ $penghuni->nama_penghuni }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
    <label for="id_kamar">Kamar</label>
    <select class="form-control" id="id_kamar" name="id_kamar" required>
        <option value="">Pilih Kamar</option>
        @foreach ($kamars as $kamar)
            <option value="{{ $kamar->id }}">{{ $kamar->nama_kamar }}</option>
        @endforeach
    </select>
</div>

        <div class="form-group">
            <label for="bulan">Bulan</label>
            <input type="text" class="form-control" id="bulan" name="bulan" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="belum">Belum</option>
                <option value="lunas">Lunas</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
