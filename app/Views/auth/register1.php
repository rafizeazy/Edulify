<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center" style="font-weight: bold;">REGISTER</h4>
                    <hr>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <script>
                            Swal.fire({
                                title: 'Berhasil!',
                                text: '<?= session()->getFlashdata('success') ?>',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = '<?= base_url('/') ?>'; // Redirect ke homepage
                                }
                            });
                        </script>
                    <?php endif; ?>


                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                        </div>
                    <?php endif; ?>

                    <?= validation_list_errors() ?>
                    <?php echo session()->getFlashdata('error'); ?>

                    <?= form_open('register'); ?>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Register</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
            <div class="text-center mt-2">
                Sudah punya akun? <a href="<?php echo base_url('/'); ?>">Silakan login.</a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>