<?php
$servername = "db";
$username = getenv("MYSQL_USER") ?: "testuser";
$password = getenv("MYSQL_PASSWORD") ?: "testpass";
$dbname = getenv("MYSQL_DATABASE") ?: "testdb";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil ke database '$dbname' dengan user '$username'";
$conn->close();
?>
