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
    <style>
        .bg-gradient-info {
            background: linear-gradient(45deg, #1d3557, #457b9d);
            color: white;
        }

        .card {
            border-radius: 10px;
        }

        .btn-success {
            background-color: #2a9d8f;
            border: none;
            transition: all 0.3s;
        }

        .btn-success:hover {
            background-color: #21867a;
        }

        .btn-light-secondary {
            border: 1px solid #dcdcdc;
            transition: background-color 0.3s;
        }

        .btn-light-secondary:hover {
            background-color: #f4f4f4;
        }

        input:focus {
            box-shadow: 0px 0px 5px #457b9d;
            border-color: #457b9d;
        }

        .row.justify-content-center {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 10vh;

            margin: 0;

        }

        .card {
            max-width: 500px;

            width: 100%;

            padding: 15px;

        }
    </style>
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
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
                                class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="fa-solid fa-user"></i>
                                    <span>Siswa</span>
                                </a>

                                <ul class="submenu ">

                                    <li class="submenu-item  ">
                                        <a href="<?= base_url('siswa'); ?>" class="submenu-link">Data Siswa</a>

                                    </li>

                                </ul>


                            </li>

                            <li
                                class="sidebar-item  has-sub ">
                                <a href="#" class='sidebar-link'>
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                    <span>Pengajar</span>
                                </a>

                                <ul class="submenu ">

                                    <li class="submenu-item ">
                                        <a href="<?= base_url('guru'); ?>" class="submenu-link">Data Pengajar</a>

                                    </li>

                                    <li class="submenu-item  ">
                                        <a href="<?= base_url('guru/tambah'); ?>" class="submenu-link">Tambah Data Pengajar</a>

                                    </li>


                                </ul>


                            </li>

                            <li
                                class="sidebar-item  has-sub active">
                                <a href="#" class='sidebar-link'>
                                    <i class="fa-solid fa-book"></i>
                                    <span>Materi</span>
                                </a>

                                <ul class="submenu ">

                                    <li class="submenu-item active  ">
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
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Materi Pembelajaran | Edulify</h3>
                            <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Materi Pembelajaran</li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('materi/tambah'); ?>">Tambah Materi Baru</a></li>

                            </ol>
                        </nav>

                        <div class="col-12 col-md-6 order-md-2 order-first">
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <?php foreach ($materi as $item): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <video controls class="card-img-top">
                                <source src="<?= base_url('uploads/videos/' . $item['video']); ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="card-body">
                                <h5 class="card-title"><?= $item['mapel']; ?> - <?= $item['kelas']; ?></h5>
                                <p class="card-text"><?= $item['deskripsi']; ?></p>
                                <p><strong>Pengajar:</strong> <?= $item['nama_lengkap']; ?></p>

                                <a href="#" class="btn btn-danger" onclick="confirmDelete('<?= base_url('materi/hapus/' . $item['id']); ?>')">Hapus</a>
                                <script>
                                    function confirmDelete(url) {
                                        Swal.fire({
                                            title: 'Apakah Anda yakin?',
                                            text: "Anda tidak akan dapat mengembalikan ini!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Ya, hapus!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = url;
                                            }
                                        })
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <script src="assets/compiled/js/form-validation.js"></script>
    <script src="assets/compiled/js/form-elements.js"></script>
    <script src="assets/compiled/js/modal-steps.js"></script>

    <script src="assets/static/js/pages/dashboard.js"></script>

</body>

</html>