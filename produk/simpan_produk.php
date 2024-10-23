<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "joglomaqha");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$namaProduk = $_POST['namaProduk'] ?? null;
$idKategori = $_POST['kategori'] ?? null;
$deskripsi = $_POST['deskripsi'] ?? null; // Tambahkan deskripsi
$harga = $_POST['harga'] ?? null;
$stok = $_POST['stok'] ?? null; // Tambahkan stok

// Cek apakah data form tidak kosong
if ($namaProduk && $idKategori && $deskripsi && $harga && $stok) {
    // Simpan data ke tabel tb_produk
    $sql = "INSERT INTO tb_produk (id_kategori, nama_produk, deskripsi, harga, stok, tanggal_dibuat, tanggal_diperbarui) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("issii", $idKategori, $namaProduk, $deskripsi, $harga, $stok);

        if ($stmt->execute()) {
            echo "Produk berhasil disimpan.";
        } else {
            echo "Error saat menyimpan data: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error dalam persiapan statement: " . $conn->error;
    }
} else {
    echo "Data form tidak lengkap.";
}

$conn->close();
?>
