<?php
include 'koneksi.php'; // Pastikan file ini mengatur koneksi ke database dengan benar

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_kategori = $_POST['id_kategori'];

    // Query untuk menghapus data dari tabel tb_kategori
    $query = "DELETE FROM tb_kategori WHERE id_kategori = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id_kategori);

    if ($stmt->execute()) {
        // Redirect ke halaman kategori-produk.php setelah penghapusan berhasil
        header("Location: ../kategori-produk.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>