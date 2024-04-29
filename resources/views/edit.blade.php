<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tamu</title>
    <style>
        body {
            font-family: 'Arial';
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
    <form action="{{ route('daftar_tamu.update', $tamu->id) }}" method="POST" onsubmit="return confirm('Apakah data anda sudah benar?')">
    @csrf
    @method('PUT')

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="{{ $tamu->nama }}"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $tamu->email }}"><br>

    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" value="{{ $tamu->alamat }}"><br>

    <label for="kategori">Kategori:</label>
    <input type="text" id="kategori" name="kategori" value="{{ $tamu->kategori }}"><br>

    <label for="tujuan">Tujuan:</label>
    <input type="text" id="tujuan" name="tujuan" value="{{ $tamu->tujuan }}"><br>

    <button type="submit">Simpan Perubahan</button>
    </div>
</form>
</body>
</html>