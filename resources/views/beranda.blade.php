@extends('layouts.master')

@section('title', 'Aplikasi Laravel')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Kost Bahagia</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
            height: 100%;
            display: flex;
            flex-direction: column;
            background-image: url('https://source.unsplash.com/1600x900/?business,office'); /* Gambar latar belakang */
            background-size: cover;
            background-position: center;
        }

        .header {
            background-color: rgba(6, 59, 172, 0.8); /* Transparansi */
            padding: 20px;
            text-align: center;
            color: #fff;
            position: relative;
            z-index: 1;
        }

        .header h4 {
            margin: 0;
            font-size: 28px;
        }

        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .content {
            background: rgba(7, 109, 159, 0.9); /* Transparansi */
            padding: 40px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 800px;
            position: relative;
            z-index: 2;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #fff;
            font-weight: bold;
        }

        p {
            font-size: 22px;
            margin-bottom: 30px;
            color: #fff;
        }

        .btn {
            display: inline-block;
            background-color: #007bff; /* Warna biru */
            color: #fff;
            padding: 15px 30px;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Tambahkan efek transform */
        }

        .btn:hover {
            background-color: #0056b3; /* Warna biru lebih gelap saat hover */
            transform: translateY(-3px); /* Efek angkat saat hover */
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(243, 244, 246, 0.9); /* Transparansi */
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .footer p {
            margin: 0;
            font-size: 16px; 
            color: #666;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 36px;
            }

            p {
                font-size: 18px;
            }

            .btn {
                font-size: 18px;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h4>Beranda</h4>
    </div>
    <div class="container">
        <div class="content">
            <h1>KOST BAHAGIA</h1>
            <p>Membantu Untuk Mengelola Kost <strong>Lebih Baik</strong></p>
        </div>
    </div>
    <div class="footer">
    </div>
</body>
</html>
@endsection