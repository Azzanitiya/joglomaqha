<?php
include 'koneksi.php'; // Pastikan path ke file koneksi benar

// Aktifkan error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi_kategori = $_POST['deskripsi_kategori'];
    $tanggal_dibuat = $_POST['tanggal_dibuat'];
    $tanggal_diperbarui = $_POST['tanggal_diperbarui'];

    // Menggunakan prepared statement untuk keamanan
    $stmt = $conn->prepare("INSERT INTO tb_kategori (id_kategori, nama_kategori, deskripsi, tanggal_dibuat, tanggal_diperbarui) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $id_kategori, $nama_kategori, $deskripsi_kategori, $tanggal_dibuat, $tanggal_diperbarui);

    if ($stmt->execute()) {
        echo "<script>
                alert('Data berhasil disimpan');
                window.location.href = '../kategori-produk.php';
                </script>";
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
