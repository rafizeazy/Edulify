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


            <form action="<?= base_url('materi/save'); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="guru" class="form-label">Pengajar</label>
                    <select name="guru" id="guru" class="form-select" required>
                        <option value="" disabled selected>Pilih Pengajar</option>
                        <?php foreach ($guru as $data): ?>
                            <option value="<?= $data['nama_lengkap']; ?>"><?= $data['nama_lengkap']; ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Masukkan kelas (e.g., 10A)" required>
                </div>

                <div class="mb-3">
                    <label for="mapel" class="form-label">Mata Pelajaran</label>
                    <select name="mapel" id="mapel" class="form-select" required>
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

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="video" class="form-label">Upload Video</label>
                    <input type="file" name="video" id="video" class="form-control" accept="video/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Materi</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>