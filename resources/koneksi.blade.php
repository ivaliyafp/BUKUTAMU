<?php
// Koneksi ke basis data
$servername = "localhost";
$username = "username_db";
$password = "password_db";
$database = "nama_database";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan pengecekan ke basis data
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login berhasil
        // Redirect ke halaman selanjutnya, atau lakukan tindakan lain yang sesuai
        header("Location: login.blade.php");
        exit();
    } else {
        // Login gagal
        $error = "Username atau password salah!";
    }
}
?>