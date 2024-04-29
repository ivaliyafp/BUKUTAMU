<!-- resources/views/tamu-terimpan.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tersimpan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 100px;
            background-color: #89B3B6;
            text-align: center;
        }
        .box {
            padding: 150px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        
        }
        h1 {
            color: #000;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        a {
            display: block;
            margin-top: 20px;
            padding: 15px;
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
    <div class="box">
        <h1>Data Tersimpan!</h1>
        <a href="{{ route('welcome') }}">Kembali</a>
    </div>
</body>
</html>
