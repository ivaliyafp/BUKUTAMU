<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from tamu</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Tambahkan jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #89B3B6;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-container {
            width: 50%;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #3490dc;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2074a0;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Harap isi terlebih dahulu</h1>
        <form action="{{ url('/simpan_tamu') }}" method="POST"> 
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" required></input>

            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" required>

            <label for="tujuan">Tujuan:</label>
            <input type="text" name="tujuan" required>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
