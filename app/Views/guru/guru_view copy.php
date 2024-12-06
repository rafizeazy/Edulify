<a href="<?= base_url('dashboard'); ?>" class="text-blue-500 mb-4 inline-block">
    <i class="fas fa-home"></i> Kembali
</a>
<div class="container pt-5">

    <a href="<?= base_url('guru/tambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Barang</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Email</th>
                            <th>Mapel</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getGuru as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nip']; ?></td>
                                <td><?= $isi['nama_lengkap']; ?></td>
                                <td><?= $isi['email']; ?></td>
                                <td><?= $isi['mapel']; ?></td>
                                <td>
                                    <a href="<?= base_url('guru/edit/' . $isi['nip']); ?>"
                                        class="btn btn-success">
                                        Edit</a>
                                    <a href="<?= base_url('guru/hapus/' . $isi['nip']); ?>"
                                        onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')"
                                        class="btn btn-danger">
                                        Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>