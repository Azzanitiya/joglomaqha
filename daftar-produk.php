<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <title>Joglo Maqha | Tempat Mencari Inspirasi</title>

    <!-- color-modes:js -->
    <script src="assets/js/color-modes.js"></script>
    <!-- endinject -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="assets/css/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/css/flatpickr.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="assets/images/maqha-icon.png" />
</head>
<body>
    <div class="main-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include 'future/_sidebar.php'; ?>
        <!-- End Kelas Ketiga-->
        <!-- partial -->
        <div class="page-wrapper">
            <!-- partial:partials/_navbar.html -->
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
            <!-- partial -->
            <div class="page-content">
                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Daftar Produk</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <!-- Tambahkan tombol untuk menambahkan produk -->
                        <button type="button" class="btn btn-success btn-icon-text me-2 mb-2 mb-md-0" data-bs-toggle="modal" data-bs-target="#tambahProdukModal">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            Tambah Produk
                        </button>
                    </div>
                </div>

                <!-- Tambahkan modal disini -->
                <div class="modal fade" id="tambahProdukModal" tabindex="-1" aria-labelledby="tambahProdukModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahProdukModalLabel">Tambah Produk</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="config_daftar_produk/simpan_produk.php" method="POST">
                                    <div class="mb-3">
                                        <label for="namaProduk" class="form-label">Nama Produk</label>
                                        <input type="text" class="form-control" id="namaProduk" name="namaProduk" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kategori" class="form-label">Kategori</label>
                                        <select class="form-control" id="kategori" name="kategori" required>
                                            <option value="">Pilih Kategori</option>
                                            <?php
                                            // Koneksi ke database
                                            $conn = new mysqli("localhost", "root", "", "joglomaqha");

                                            // Cek koneksi
                                            if ($conn->connect_error) {
                                                die("Koneksi gagal: " . $conn->connect_error);
                                            }

                                            // Ambil data kategori
                                            $sql = "SELECT id_kategori, nama_kategori FROM tb_kategori";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . intval($row['id_kategori']) . "'>" . $row['nama_kategori'] . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="stok" class="form-label">Stok</label>
                                        <input type="number" class="form-control" id="stok" name="stok" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggalDibuat" class="form-label">Tanggal Dibuat</label>
                                        <input type="date" class="form-control" id="tanggalDibuat" name="tanggalDibuat" value="<?php echo date('Y-m-d'); ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggalDiperbarui" class="form-label">Tanggal Diperbarui</label>
                                        <input type="date" class="form-control" id="tanggalDiperbarui" name="tanggalDiperbarui" value="<?php echo date('Y-m-d'); ?>" readonly>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir dari modal -->

                <!-- Tambahkan tabel disini -->
                <div class="row">
                    <!-- Tabel Kategori Makanan -->
                    <div class="col-12 mb-4">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Tanggal Dibuat</th>
                                        <th scope="col">Tanggal Diperbarui</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include 'config_daftar_produk/ambil_produk.php'; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Akhir dari tabel -->
            </div>
            <!-- partial:partials/_footer.html -->
            <footer class="footer d-flex flex-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-secondary mb-1 mb-md-0">Copyright © 2024 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
                <p class="text-secondary">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
            </footer>
            <!-- partial -->
        </div>
    </div>

    <!-- core:js -->
    <script src="assets/js/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="assets/js/flatpickr.min.js"></script>
    <script src="assets/js/apexcharts.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>
</html>
