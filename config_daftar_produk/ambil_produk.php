<?php
// ... existing code ...

// Query untuk mengambil data dari tb_produk dan tb_kategori
$sql = "SELECT p.id_produk, p.nama_produk, k.nama_kategori, p.harga, p.tanggal_dibuat, p.tanggal_diperbarui 
        FROM tb_produk p
        JOIN tb_kategori k ON p.id_kategori = k.id_kategori";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    $no = 1;
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row["nama_produk"] . "</td>";
        echo "<td>" . $row["nama_kategori"] . "</td>"; // Menampilkan nama kategori
        echo "<td>Rp " . number_format($row["harga"], 0, ',', '.') . "</td>"; // Mengubah harga menjadi format Rupiah
        echo "<td>" . date("d-m-Y", strtotime($row["tanggal_dibuat"])) . "</td>";
        echo "<td>" . date("d-m-Y", strtotime($row["tanggal_diperbarui"])) . "</td>";
        echo "<td><a href='edit.php?id=" . $row["id_produk"] . "' class='btn btn-primary btn-sm'>Edit</a> | <a href='delete.php?id=" . $row["id_produk"] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
}

// ... existing code ...
?>
