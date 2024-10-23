<nav class="sidebar">
            <div class="sidebar-header">
                <a href="" class="sidebar-brand">
                    Joglo<span> Maqha</span>
                </a>
                <div class="sidebar-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav" id="sidebarNav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>
                    <!-- Kelas Pertama-->
                    <li class="nav-item nav-category">BERANDA</li>
                    <li class="nav-item">
                        <a href="transaksi.php" class="nav-link">
                            <i class="link-icon" data-feather="dollar-sign"></i>
                            <span class="link-title">Transaksi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseLaporan" role="button" aria-expanded="false" aria-controls="collapseLaporan">
                            <i class="link-icon" data-feather="book-open"></i>
                            <span class="link-title">Laporan</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="collapseLaporan" data-bs-parent="#sidebarNav">
                            <ul class="nav sub-menu">
                                <li class="nav-item"><a href="penjualan-produk.php" class="nav-link">Penjualan Produk</a></li>
                                <li class="nav-item"><a href="diskon.php" class="nav-link">Diskon</a></li>
                                <li class="nav-item"><a href="tipe-pesanan.php" class="nav-link">Tipe Pesanan</a></li>
                                <li class="nav-item"><a href="pembayaran.php" class="nav-link">Pembayaran</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Kelas Pertama-->

                    <!-- Kelas Kedua-->
                    <li class="nav-item nav-category">KELOLA PRODUK</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseProduk" role="button" aria-expanded="false" aria-controls="collapseProduk">
                            <i class="link-icon" data-feather="archive"></i>
                            <span class="link-title">Produk</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="collapseProduk" data-bs-parent="#sidebarNav">
                            <ul class="nav sub-menu">
                                <li class="nav-item"><a href="daftar-produk.php" class="nav-link">Daftar Produk</a></li>
                                <li class="nav-item"><a href="kategori-produk.php" class="nav-link">Kategori</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseInventaris" role="button" aria-expanded="false" aria-controls="collapseInventaris">
                            <i class="link-icon" data-feather="pie-chart"></i>
                            <span class="link-title">Inventaris</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="collapseInventaris" data-bs-parent="#sidebarNav">
                            <ul class="nav sub-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Ringkasan</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Penyesuaian Stok</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="percent"></i>
                            <span class="link-title">Diskon</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="book"></i>
                            <span class="link-title">Type Pesanan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseBahanBaku" role="button" aria-expanded="false" aria-controls="collapseBahanBaku">
                            <i class="link-icon" data-feather="archive"></i>
                            <span class="link-title">Bahan Baku</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="collapseBahanBaku" data-bs-parent="#sidebarNav">
                            <ul class="nav sub-menu">                                <li class="nav-item"><a href="#" class="nav-link">Daftar Bahan Baku</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Kategori Bahan Baku</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Resep</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Kelas Kedua-->

                    <!-- Kelas Ketiga-->
                    <li class="nav-item nav-category">Kelola Toko</li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
                            <i class="link-icon" data-feather="dollar-sign"></i>
                            <span class="link-title">Pembayaran</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" data-bs-parent="#sidebarNav" id="uiComponents">
                            <ul class="nav sub-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Metode Pembayaran</a></li>                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseOutlet" role="button" aria-expanded="false" aria-controls="collapseOutlet">
                            <i class="link-icon" data-feather="home"></i>
                            <span class="link-title">Outlet</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" data-bs-parent="#sidebarNav" id="collapseOutlet">
                            <ul class="nav sub-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Lokasi</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Kode Akses Kasir</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Sift</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Struk</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="percent"></i>
                            <span class="link-title">Pelanggan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="settings"></i>
                            <span class="link-title">Toko Online</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Kelas Ketiga-->
        <!-- partial -->