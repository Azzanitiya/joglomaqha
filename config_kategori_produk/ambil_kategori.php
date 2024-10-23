<?php
include 'koneksi.php';

$sql = "SELECT id_kategori, nama_kategori, deskripsi, tanggal_dibuat, tanggal_diperbarui FROM tb_kategori";
$result = $conn->query($sql);

$kategori_data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $kategori_data[] = $row;
    }
}
$conn->close();
?>

