<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Pembelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Materi Pembelajaran</h2>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>