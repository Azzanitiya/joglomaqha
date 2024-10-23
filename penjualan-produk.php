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

    <style>
        @media (max-width: 768px) {
            .table thead {
                display: none;
            }
            .table, .table tbody, .table tr, .table td {
                display: block;
                width: 100%;
            }
            .table tr {
                margin-bottom: 15px;
            }
            .table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }
            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
            .form-control, .btn {
                margin-bottom: 15px; /* Menambahkan jarak antar elemen */
            }
        }
    </style>
</head>
<body>
    <div class="main-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php 
        include 'koneksi.php';
        include 'future/_sidebar.php'; ?>
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
            <!-- ... existing code ... -->
            <div class="page-content">
                <div class="container-fluid">
                    <h4 class="mb-4">Transaksi Penjualan Produk</h4>
        
                    <!-- Form Filter -->
                    <form class="mb-4" id="filterForm">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Nama Kasir" id="filterNamaKasir">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" placeholder="Nama Produk" id="filterNamaProduk">
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="filterStatus">
                                    <option value="">Semua Status</option>
                                    <option value="Selesai">Selesai</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary" onclick="applyFilter()">Filter</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form Filter -->

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Kasir</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Total Penjualan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody id="transaksiTableBody">
                                <!-- Data rows will be dynamically inserted here -->
                            </tbody>
                        </table>
                        <div id="pagination" class="d-flex justify-content-center mt-3">
                            <!-- Pagination buttons will be dynamically inserted here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ... existing code ... -->

            <script>
                function applyFilter() {
                    var namaKasir = document.getElementById('filterNamaKasir').value.toLowerCase();
                    var namaProduk = document.getElementById('filterNamaProduk').value.toLowerCase();
                    var status = document.getElementById('filterStatus').value.toLowerCase();
                    
                    var table = document.getElementById('transaksiTableBody');
                    var rows = table.getElementsByTagName('tr');
                    
                    for (var i = 0; i < rows.length; i++) {
                        var cells = rows[i].getElementsByTagName('td');
                        var kasir = cells[0].textContent.toLowerCase();
                        var produk = cells[1].textContent.toLowerCase();
                        var statusCell = cells[4].textContent.toLowerCase();
                        
                        if ((namaKasir === "" || kasir.includes(namaKasir)) &&
                            (namaProduk === "" || produk.includes(namaProduk)) &&
                            (status === "" || statusCell.includes(status))) {
                            rows[i].style.display = "";
                        } else {
                            rows[i].style.display = "none";
                        }
                    }
                }

                const data = [
                    { kasir: "Kasir 1", produk: "Produk A", penjualan: "Rp 1.000.000", tanggal: "2024-01-01", status: "Selesai" },
                    { kasir: "Kasir 2", produk: "Produk B", penjualan: "Rp 500.000", tanggal: "2024-01-02", status: "Pending" },
                    { kasir: "Kasir 1", produk: "Produk A", penjualan: "Rp 1.000.000", tanggal: "2024-01-01", status: "Selesai" },
                    { kasir: "Kasir 2", produk: "Produk B", penjualan: "Rp 500.000", tanggal: "2024-01-02", status: "Pending" },
                    { kasir: "Kasir 1", produk: "Produk A", penjualan: "Rp 1.000.000", tanggal: "2024-01-01", status: "Selesai" },
                    { kasir: "Kasir 2", produk: "Produk B", penjualan: "Rp 500.000", tanggal: "2024-01-02", status: "Pending" },
                    { kasir: "Kasir 1", produk: "Produk A", penjualan: "Rp 1.000.000", tanggal: "2024-01-01", status: "Selesai" },
                    { kasir: "Kasir 2", produk: "Produk B", penjualan: "Rp 500.000", tanggal: "2024-01-02", status: "Pending" },
                    { kasir: "Kasir 1", produk: "Produk A", penjualan: "Rp 1.000.000", tanggal: "2024-01-01", status: "Selesai" },
                    { kasir: "Kasir 2", produk: "Produk B", penjualan: "Rp 500.000", tanggal: "2024-01-02", status: "Pending" },
                    { kasir: "Kasir 1", produk: "Produk A", penjualan: "Rp 1.000.000", tanggal: "2024-01-01", status: "Selesai" },
                    { kasir: "Kasir 2", produk: "Produk B", penjualan: "Rp 500.000", tanggal: "2024-01-02", status: "Pending" },
                    // Tambahkan data lainnya di sini
                ];

                const itemsPerPage = 10;
                let currentPage = 1;

                function renderTable(page) {
                    const start = (page - 1) * itemsPerPage;
                    const end = start + itemsPerPage;
                    const paginatedData = data.slice(start, end);

                    const tableBody = document.getElementById('transaksiTableBody');
                    tableBody.innerHTML = '';

                    paginatedData.forEach(item => {
                        const row = `<tr>
                            <td data-label="Nama Kasir">${item.kasir}</td>
                            <td data-label="Nama Produk">${item.produk}</td>
                            <td data-label="Total Penjualan">${item.penjualan}</td>
                            <td data-label="Tanggal">${item.tanggal}</td>
                            <td data-label="Status"><span class="badge ${item.status === 'Selesai' ? 'bg-success' : 'bg-warning'}">${item.status}</span></td>
                        </tr>`;
                        tableBody.innerHTML += row;
                    });

                    renderPagination();
                }

                function renderPagination() {
                    const totalPages = Math.ceil(data.length / itemsPerPage);
                    const pagination = document.getElementById('pagination');
                    pagination.innerHTML = '';

                    for (let i = 1; i <= totalPages; i++) {
                        const button = `<button class="btn btn-secondary mx-1" onclick="changePage(${i})">${i}</button>`;
                        pagination.innerHTML += button;
                    }
                }

                function changePage(page) {
                    currentPage = page;
                    renderTable(currentPage);
                }

                // Initial render
                renderTable(currentPage);
            </script>

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