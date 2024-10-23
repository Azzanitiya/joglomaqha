<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joglo Maqha | Tempat Mencari Inspirasi</title>
    <script src="assets/js/color-modes.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/maqha-icon.png" />
</head>
<body>
    <div class="main-wrapper">
        <?php include 'future/_sidebar.php'; ?>
        <div class="page-wrapper">
        <nav class="navbar">
                <div class="navbar-content">
                    <div class="logo-mini-wrapper">
                        <img src="assets/images/maqha-icon.png" class="logo-mini logo-mini-light" alt="logo">
                        <img src="assets/images/maqha-icon.png" class="logo-mini logo-mini-dark" alt="logo">
                    </div>

                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-text">
                                <i data-feather="search"></i>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>

                    <ul class="navbar-nav">
                        <li class="theme-switcher-wrapper nav-item">
                            <input type="checkbox" value="" id="theme-switcher">
                            <label for="theme-switcher">
                                <div class="box">
                                    <div class="ball"></div>
                                </div>
                            </label>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p class="mb-0 fw-bold">Web Apps</p>
                                    <a href="javascript:;" class="text-secondary">Edit</a>
                                </div>
                                <div class="row g-0 p-1">
                                    <div class="col-3 text-center">
                                        <a href="#" class="dropdown-item d-flex flex-column align-items-center justify-content-center w-70px h-70px">
                                            <i data-feather="wifi" class="icon-lg mb-1"></i>
                                            <p class="fs-12px">Wifi</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#" class="dropdown-item d-flex flex-column align-items-center justify-content-center w-70px h-70px">
                                            <i data-feather="camera" class="icon-lg mb-1"></i>
                                            <p class="fs-12px">CCTV</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#" class="dropdown-item d-flex flex-column align-items-center justify-content-center w-70px h-70px">
                                            <i data-feather="calendar" class="icon-lg mb-1"></i>
                                            <p class="fs-12px">Calendar</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="#" class="dropdown-item d-flex flex-column align-items-center justify-content-center w-70px h-70px">
                                            <i data-feather="instagram" class="icon-lg mb-1"></i>
                                            <p class="fs-12px">Instagram</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                                    <p>Notifications</p>
                                    <a href="javascript:;" class="text-secondary">Clear all</a>
                                </div>
                                <div class="p-1">
                                    <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                                        <div class="w-30px h-30px d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                            <i class="icon-sm text-white" data-feather="gift"></i>
                                        </div>
                                        <div class="flex-grow-1 me-2">
                                            <p>New Order Recieved</p>
                                            <p class="fs-12px text-secondary">30 min ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-secondary" data-feather="user"></i>
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="w-80px h-80px rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="fs-16px fw-bolder">Aditya Taufik</p>
                                        <p class="fs-12px text-secondary">adityataufik@gmail.com</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="pages/general/profile.html" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="sidebar-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>
            </nav>
            <div class="page-content">
                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Kategori Produk</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <button type="button" class="btn btn-success btn-icon-text me-2 mb-2 mb-md-0" data-bs-toggle="modal" data-bs-target="#tambahKategoriModal">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            Tambah Kategori
                        </button>
                    </div>
                </div>

                <!-- Tambahkan tabel disini -->
                <div>
                    <?php include 'config_kategori_produk/ambil_kategori.php'; ?>

                    <div class="table-responsive">
                        <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th>No.</th>
                                <!-- <th>ID</th> --> <!-- Sembunyikan kolom ID -->
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Tanggal Dibuat</th>
                                <th>Tanggal Diperbarui</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($kategori_data)) {
                                $no = 1;
                                foreach ($kategori_data as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $no++ . "</td>";
                                    // echo "<td>" . $row["id_kategori"] . "</td>"; // Sembunyikan kolom ID
                                    echo "<td>" . $row["nama_kategori"] . "</td>";
                                    echo "<td>" . $row["deskripsi"] . "</td>";
                                    echo "<td>" . date("d-m-Y", strtotime($row["tanggal_dibuat"])) . "</td>";
                                    echo "<td>" . date("d-m-Y", strtotime($row["tanggal_diperbarui"])) . "</td>";
                                    echo "<td>
                                            <form action='config_kategori_produk/hapus_kategori.php' method='POST' style='display:inline;' onsubmit='return confirm(\"Apakah Anda yakin ingin menghapus kategori ini?\");'>
                                                <input type='hidden' name='id_kategori' value='" . $row["id_kategori"] . "'>
                                                <button type='submit' class='btn btn-danger btn-sm'>Hapus</button>
                                            </form>
                                            </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>Tidak ada data</td></tr>"; // Ubah colspan menjadi 6
                            }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
                <!-- component -->

            </div>
            <footer class="footer d-flex flex-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-secondary mb-1 mb-md-0">Copyright © 2024 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
                <p class="text-secondary">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
            </footer>
        </div>
    </div>

    <script src="assets/js/core.js"></script>
    <script src="assets/js/flatpickr.min.js"></script>
    <script src="assets/js/apexcharts.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/dashboard.js"></script>

    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="tambahKategoriModal" tabindex="-1" aria-labelledby="tambahKategoriModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahKategoriModalLabel">Tambah Kategori Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="config_kategori_produk/simpan_kategori.php" method="POST">
                        <div class="mb-3">
                            <label for="idKategori" class="form-label">ID Kategori</label>
                            <input type="text" class="form-control" id="idKategori" name="id_kategori" placeholder="Masukkan ID kategori">
                        </div>
                        <div class="mb-3">
                            <label for="namaKategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="namaKategori" name="nama_kategori" placeholder="Masukkan nama kategori">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiKategori" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsiKategori" name="deskripsi_kategori" placeholder="Masukkan deskripsi kategori"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalDibuat" class="form-label">Tanggal Dibuat</label>
                            <input type="date" class="form-control" id="tanggalDibuat" name="tanggal_dibuat">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalDiperbarui" class="form-label">Tanggal Diperbarui</label>
                            <input type="date" class="form-control" id="tanggalDiperbarui" name="tanggal_diperbarui">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Kategori -->
</body>
</html>
