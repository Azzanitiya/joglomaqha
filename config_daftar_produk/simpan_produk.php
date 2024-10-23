<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "joglomaqha");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$namaProduk = $_POST['namaProduk'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$tanggalDibuat = $_POST['tanggalDibuat'];
$tanggalDiperbarui = $_POST['tanggalDiperbarui'];

// Query untuk menyimpan data ke tabel tb_produk
$sql = "INSERT INTO tb_produk (nama_produk, id_kategori, deskripsi, harga, stok, tanggal_dibuat, tanggal_diperbarui) 
        VALUES ('$namaProduk', '$kategori', '$deskripsi', '$harga', '$stok', '$tanggalDibuat', '$tanggalDiperbarui')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Data berhasil disimpan');
            window.location.href='../daftar-produk.php';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
