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
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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