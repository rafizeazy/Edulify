<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Edulify Admin Dashboard</title>
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

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tabel Data Guru | Edulify</h3>
                            <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('/guru'); ?>">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Pengajar</li>
                            </ol>
                        </nav>

                        <div class="col-12 col-md-6 order-md-2 order-first">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg">
                        <div class="card-header">
                            <h4 class="card-title">Pendaftaran Guru</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url('guru/add'); ?>" class="form form-vertical">
                                <div class="form-body">
                                    <div class="row">

                                        <div class="col-12 mb-3">
                                            <label for="nip" class="form-label">Nomor Induk Pegawai</label>
                                            <input type="text" id="nip" class="form-control shadow-sm"
                                                name="nip" placeholder="Masukkan Nomor Induk Pegawai" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" id="email" class="form-control shadow-sm"
                                                name="email" placeholder="Masukkan Email" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                            <input type="text" id="nama_lengkap" class="form-control shadow-sm"
                                                name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" id="password" class="form-control shadow-sm"
                                                name="password" placeholder="Masukkan Password" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="mapel" class="form-label">Mata Pelajaran</label>
                                            <select name="mapel" id="mapel" class="form-select shadow-sm" required>
                                                <option value="" disabled selected>Pilih Mata Pelajaran</option>
                                                <option value="PBO">PBO</option>
                                                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                                <option value="Matematika">Matematika</option>
                                                <option value="Algoritma">Algoritma</option>
                                                <option value="Desain Grafis">Desain Grafis</option>
                                                <option value="PKN">PKN</option>
                                            </select>
                                        </div>

                                        <div class="col-12 d-flex justify-content-end gap-2">
                                            <button type="submit" class="btn btn-success shadow-sm">
                                                <i class="fa-solid fa-paper-plane me-1"></i>Submit
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <script src="assets/compiled/js/form-validation.js"></script>
    <script src="assets/compiled/js/form-elements.js"></script>
    <script src="assets/compiled/js/modal-steps.js"></script>

    <script src="assets/static/js/pages/dashboard.js"></script>

</body>

</html>