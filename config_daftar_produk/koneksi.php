<?php
// Konfigurasi koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "joglomaqha";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengatur karakter set koneksi ke UTF-8
$conn->set_charset("utf8");

// Catatan: Jangan lupa untuk menutup koneksi setelah selesai menggunakan
$conn->close();
?>
