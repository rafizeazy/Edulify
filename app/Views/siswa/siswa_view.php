<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - KlikBelajar Admin Dashboard</title>
    <link rel="icon" href="/assets/img/favicon.png" type="image/png">



    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" crossorigin href="/assets/compiled/css/app.css">
    <link rel="stylesheet" crossorigin href="/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" crossorigin href="/assets/compiled/css/iconly.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a href="/dashboard"
                                style="font-size: 35px;font-weight:900;font-family: 'Poppins', sans-serif;"
                                class=""><i style="font-size: 30px;"
                                    class="fas fa"></i> |
                                Edulify</a>
                        </div>

                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li
                            class="sidebar-item">
                            <a href="<?= base_url('dashboard'); ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>


                        </li>

                        <li
                            class="sidebar-item  has-sub active">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-user"></i>
                                <span>Siswa</span>
                            </a>

                            <ul class="submenu ">

                                <li class="submenu-item active ">
                                    <a href="<?= base_url('guru'); ?>" class="submenu-link">Data Siswa</a>

                                </li>

                            </ul>


                        </li>

                        <li
                            class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <span>Pengajar</span>
                            </a>

                            <ul class="submenu ">

                                <li class="submenu-item">
                                    <a href="<?= base_url('guru'); ?>" class="submenu-link">Data Pengajar</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="<?= base_url('guru/tambah'); ?>" class="submenu-link">Tambah Data Pengajar</a>

                                </li>


                            </ul>


                        </li>

                        <li
                            class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-book"></i>
                                <span>Materi</span>
                            </a>

                            <ul class="submenu ">

                                <li class="submenu-item  ">
                                    <a href="<?= base_url('materi'); ?>" class="submenu-link">Data Materi</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="<?= base_url('materi/tambah'); ?>" class="submenu-link">Tambah Materi</a>

                                </li>
                            </ul>
                        </li>
                        </li>
                        <li class="sidebar-title">Raise Support</li>
                        <li
                            class="sidebar-item  ">
                            <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item  ">
                            <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                                <i class="bi bi-puzzle"></i>
                                <span>Contribute</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item  ">
                            <a href="<?php echo base_url('logout'); ?>" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Keluar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tabel Data Siswa | Edulify</h3>
                            <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('/siswa'); ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Siswa</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>Nama Siswa</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($getSiswa as $isi) { ?>
                                        <tr>

                                            <td><?= $isi['id']; ?></td>
                                            <td><?= $isi['name']; ?></td>
                                            <td><?= $isi['email']; ?></td>

                                            <td>

                                                <button class="btn btn-danger" onclick="hapusSiswa(<?= $isi['id']; ?>)">Hapus</button>
                                                <script>
                                                    function hapusSiswa(id) {
                                                        Swal.fire({
                                                            title: 'Apakah ingin menghapus data siswa?',
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Ya, hapus!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                window.location.href = '<?= base_url('siswa/hapus/'); ?>' + id;
                                                            }
                                                        })
                                                    }
                                                </script>

                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>


            <footer class="main-footer d-flex justify-content-between align-items-center">
                <div class="footer-left d-flex align-items-center">
                    Copyright &copy; 2024 | Edulify <div class="bullet"></div>
                </div>
                <div class="footer-right">
                    Made with <span class="text-danger"> &#10084;</span> by <a
                        href="https://github.com/rafizeazy">Ravy</a>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="assets/scss/pages/simple-datatables.scss">
    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/static/js/pages/simple-datatables.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>

</body>

</html>