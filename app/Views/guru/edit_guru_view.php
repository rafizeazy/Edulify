<div class="container p-5">
    <a href="<?= base_url('/guru'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Update Data Guru : <?= $getGuru->nama_lengkap; ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('guru/update'); ?>">
                <div class="form-group">
                    <label for="">Nama Guru</label>
                    <input type="text" value="<?= $getGuru->nama_lengkap; ?>" name="nama_lengkap" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" value="<?= $getGuru->email; ?>" name="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="mapel">Mata Pelajaran</label>
                    <select name="mapel" id="mapel" class="form-control" required>

                        <option value="PBO" <?php if ($getGuru->mapel == 'PBO') {
                                                echo 'selected';
                                            } ?>>PBO</option>
                        <option value="Bahasa Indonesia" <?php if ($getGuru->mapel == 'Bahasa Indonesia') {
                                                                echo 'selected';
                                                            } ?>>Bahasa Indonesia</option>
                        <option value="Matematika" <?php if ($getGuru->mapel == 'Matematika') {
                                                        echo 'selected';
                                                    } ?>>Matematika</option>
                        <option value="Algoritma" <?php if ($getGuru->mapel == 'Algoritma') {
                                                        echo 'selected';
                                                    } ?>>Algoritma</option>
                        <option value="Desain Grafis" <?php if ($getGuru->mapel == 'Desain Grafis') {
                                                            echo 'selected';
                                                        } ?>>Desain Grafis</option>
                        <option value="PKN" <?php if ($getGuru->mapel == 'PKN') {
                                                echo 'selected';
                                            } ?>>PKN</option>
                        <option value="Bahasa Inggris" <?php if ($getGuru->mapel == 'Bahasa Inggris') {
                                                            echo 'selected';
                                                        } ?>>Bahasa Inggris</option>
                    </select>

                </div>
                <input type="hidden" value="<?= $getGuru->nip; ?>" name="nip">
                <button class="btn btn-success">Edit Data</button>
            </form>

        </div>
    </div>
</div>