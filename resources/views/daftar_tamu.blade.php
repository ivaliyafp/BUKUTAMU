<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .dashboard-header {
            background-color: #89B3B6;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between; 
            align-items: center; 
        }
        .dashboard-header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: 700;
        }
        .logout-btn {
            background-color: #3490dc; 
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .logout-btn:hover {
            background-color: #2074a0;
        }
        .dashboard-content {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #89B3B6;
            color: #fff;
            border-bottom: 2px solid #fff;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3490dc;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 20px;
            margin-right: 10px;
        }
        a:hover {
            background-color: #50727B;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <header>
            <div>
                <!-- Tampilkan foto admin -->
            </div>
        </header>
        <div class="container">
            <div class="dashboard-header">
                <h1>Daftar tamu</h1>
                <div>
                    <!-- Tombol Logout -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </div>
            </div>
            <div class="dashboard-content">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Kategori</th>
                            <th>Tujuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_tamu as $tamu)
                        <tr>
                            <td>{{ $tamu->id }}</td>
                            <td>{{ $tamu->nama }}</td>
                            <td>{{ $tamu->email }}</td>
                            <td>{{ $tamu->alamat }}</td>
                            <td>{{ $tamu->kategori }}</td>
                            <td>{{ $tamu->tujuan }}</td>
                            <td>
                                <a class="button" href="{{ route('edit_tamu', $tamu->id) }}">Edit</a>
                                <!-- Formulir untuk menghapus tamu -->
                                <form action="{{ route('hapus_tamu', $tamu->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus data tamu ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
