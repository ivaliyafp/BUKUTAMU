<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 100px;
            background-color: #89B3B6;
        }
        h1 {
            text-align: center;
            color: #000;
        }
        .profile-image {
            display: block;
            margin: 20px auto;
            width: 200px; /* Sesuaikan ukuran gambar */
            border-radius: 80%; /* Agar gambarnya berbentuk lingkaran */
        }
        p {
            text-align: center;
            font-size: 18px;
            color: #555;
        }
        .welcome-container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 15px;
            background-color: #fff;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 0px;
            padding: 10px;
            background-color: #3490dc;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-size: 20px;
        }
        a:hover {
            background-color: #2074a0;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
    <img src="{{ asset('image/wikrama.jpeg') }}" alt="wikrama.jpeg" class="profile-image">
        <h1>Selamat Datang di Aplikasi Tamu</h1>
        <div class="welcome-container">
        <p>Silakan masuk untuk melanjutkan.</p>
        <a href="{{ route('tambah.tamu') }}">Masuk</a>
    </div>
</body>
</html>
