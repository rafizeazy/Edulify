<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Materi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Tambah Materi Baru | Edulify</h3>
                        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Materi Baru</li>

                        </ol>
                    </nav>

                    <div class="col-12 col-md-6 order-md-2 order-first">
                    </div>
                </div>
            </div>


            <form action="<?= base_url('materi/update/' . $materi['id']) ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="guru" class="form-label">Pengajar</label>
                    <input type="text" name="nama_lengkap" id="guru" class="form-control" value="<?= $materi['nama_lengkap']; ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $materi['kelas']; ?>" readonly>
                </div>


                <div class="mb-3">
                    <label for="mapel" class="form-label">Mata Pelajaran</label>
                    <select name="mapel" id="mapel" class="form-control" required>

                        <option value="PBO" <?php if ($materi['mapel'] == 'PBO') {
                                                echo 'selected';
                                            } ?>>PBO</option>
                        <option value="Bahasa Indonesia" <?php if ($materi['mapel'] == 'Bahasa Indonesia') {
                                                                echo 'selected';
                                                            } ?>>Bahasa Indonesia</option>
                        <option value="Matematika" <?php if ($materi['mapel'] == 'Matematika') {
                                                        echo 'selected';
                                                    } ?>>Matematika</option>
                        <option value="Algoritma" <?php if ($materi['mapel'] == 'Algoritma') {
                                                        echo 'selected';
                                                    } ?>>Algoritma</option>
                        <option value="Desain Grafis" <?php if ($materi['mapel'] == 'Desain Grafis') {
                                                            echo 'selected';
                                                        } ?>>Desain Grafis</option>
                        <option value="PKN" <?php if ($materi['mapel'] == 'PKN') {
                                                echo 'selected';
                                            } ?>>PKN</option>
                        <option value="Bahasa Inggris" <?php if ($materi['mapel'] == 'Bahasa Inggris') {
                                                            echo 'selected';
                                                        } ?>>Bahasa Inggris</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required><?= $materi['deskripsi']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="video" class="form-label">Upload Video</label>
                    <input type="file" name="video" id="video" class="form-control" accept="video/*">
                    <?php if (!empty($materi['video'])): ?>
                        <p>Current Video: <?= $materi['video']; ?></p>
                    <?php endif; ?>
                </div>
                <div class="col-md-4 col-12">
                    <button id="toast-success" class="btn btn-outline-primary btn-lg btn-block">Edit Data</button>
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="assets/scss/pages/sweetalert2.scss">
        <link rel="stylesheet" href="assets/extensions/sweetalert2/sweetalert2.min.css">
        <script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>>
        <script src="assets/static/js/pages/sweetalert2.js"></script>>
</body>

</html>