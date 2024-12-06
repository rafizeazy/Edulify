<div class="container p-5">
    <a href="<?= base_url('/guru'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Pendaftaran Guru</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('guru/add'); ?>">
                <div class="form-group">
                    <label for="">Nomor Induk Pegawai</label>
                    <input type="text" name="nip" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Emal</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                }
                ?>
                <div class="form-group">
                    <label for="mapel">Mata Pelajaran</label>
                    <select name="mapel" id="mapel" class="form-control" required>
                        <option value="" disabled selected>PBO</option>
                        <option value="PBO">PBO</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Algoritma">Algoritma</option>
                        <option value="Desain Grafis">Desain Grafis</option>
                        <option value="PKN">PKN</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                    </select>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>