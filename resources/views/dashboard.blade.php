<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        }
        .dashboard-header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: 700;
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
            background-color: #2074a0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="dashboard-header">
        <h1>Daftar tamu</h1>
    </div>
            <!-- Table body should be added here -->
        </table>

        <a href="{{ route('welcome') }}">Kembali ke Beranda</a>
        <a href="{{ route('login') }}">Login</a>
    </div>
</div>
</body>
</html>
