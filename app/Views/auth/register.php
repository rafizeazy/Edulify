<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pendaftaran Learnify</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.1/lottie.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/lottie.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-4xl w-full mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold">
                Pendaftaran Learnify
            </h1>
            <p class="text-gray-500">
                Silahkan isi data data yang diperlukan dibawah
            </p>
        </div>
        <div class="flex justify-start mb-4">
            <a class="flex items-center text-blue-500 hover:text-blue-700" href="<?= base_url('/') ?>">
                <i class="fas fa-home mr-2">
                </i>
                Kembali
            </a>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-center">
            <div class="w-full md:w-1/2 mb-8 md:mb-0">
                <img alt="Illustration of happy people celebrating" class="w-full" height="300" src="https://storage.googleapis.com/a1aa/image/zQ6TOYqRPSIgOlJagLncArNpX6NYumgNmQENqAEyVD4qyj9E.jpg" width="400" />
            </div>
            <div class="w-full md:w-1/2 md:pl-8">
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
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="nama">
                        Nama lengkap
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" name="name" placeholder="Nama lengkap" type="text" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" placeholder="Email" type="email" />
                </div>
                <div class="mb-4">
                    <div class="w-full">
                        <label class="block text-gray-700 font-bold mb-2" for="password">
                            Password
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" placeholder="At least 8 characters" type="password" />
                        <p class="text-red-500 text-xs mt-2 hidden" id="password-hint">
                            Passwords must be between 8 and 200 characters long
                        </p>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input class="form-checkbox text-green-500" type="checkbox" />
                        <span class="ml-2 text-gray-700">
                            Saya setuju dan ingin melanjutkan.
                        </span>
                    </label>
                    <p class="text-gray-500 text-xs mt-2">
                        Dengan daftar anda menyetujui privasi dan persyaratan ketentuan hukum kami. baca selengkapnya
                        <a class="text-blue-500" href="#">
                            disini
                        </a>
                        .
                    </p>
                </div>
                <div class="text-center">
                    <button class="bg-green-500 text-white font-bold py-2 px-4 rounded-full hover:bg-green-600 focus:outline-none focus:shadow-outline" type="submit">
                        Daftar Sekarang!
                    </button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>



    <script>
        document.getElementById('password').addEventListener('input', function() {
            const passwordField = document.getElementById('password');
            const passwordHint = document.getElementById('password-hint');

            if (passwordField.value.length < 8) {
                passwordHint.classList.remove('hidden');
            } else {
                passwordHint.classList.add('hidden');
            }
        });
    </script>

</body>


</html>



<?= $this->endSection() ?>