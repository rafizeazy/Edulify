<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/assets/img/favicon.png" type="image/png">
    <!-- Title -->
    <title>Selamat datang - rafi - Learnify Student Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendors/linericon/style.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="/assets/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="/assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="/assets/vendors/popup/magnific-popup.css">
    <!-- Main css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/user_style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

</head>

<body style="overflow-x:hidden;background-color:#fbf9fa">


    <!-- Start Navigation Bar -->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="dashboard"><img
                            src="/assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="javascript:void(0)">Hai, <?= session()->name ?></a>
                            </li>
                            <li class="nav-item active"><a class="nav-link" href="/">Beranda</a>
                            </li>
                            <li class=" nav-item "><a class=" nav-link text-danger"
                                    href="/">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Navigation Bar -->


    <!-- Start Greetings Card -->
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400"
            style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1">
                    <h1 class="display-4" style="color: black; font-family:'poppins';" data-aos="fade-down"
                        data-aos-duration="1400">Selamat Datang
                        di Learnify <span style="font-size: 40px;">👋🏻
                        </span> </h1>
                    <p>Hello Students! , Ini merupakan halaman utama Learnify! Silahkan pilih kelas yang akan kamu
                        akses dan pilih mata pelajaran yang ingin kamu pelajari. Selamat belajar ya Students!</p>
                    <hr>
                    <h4 style="line-height: 4px;" data-aos="fade-down" data-aos-duration="1700"><?= session()->name ?> - Learnify Students</h3>
                        <p data-aos="fade-down" data-aos-duration="1800">Silahkan pilih kelas yang akan kamu akses dibawah ini!
                        </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Greetings Card -->
    <br>
    <!-- Start Class Card -->
    <div class="container">
        <div class="row mt-4 mb-5 justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-4 mb-2 d-flex justify-content-center " data-aos-duration="1900"
                        data-aos="fade-right">
                        <a href="https://programmer.smkn1ciamis.id/learnify/user/kelas10">
                            <div class="card-kelas text-center">
                                <img src="https://programmer.smkn1ciamis.id/learnify/assets/img/kelas10.png" style="object-fit: cover;"
                                    class="card-img-top img-fluid" alt="...">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 mb-2 d-flex justify-content-center " data-aos-duration="1900"
                        data-aos="fade-down">
                        <a href="https://programmer.smkn1ciamis.id/learnify/user/kelas11">
                            <div class="card-kelas">
                                <img src="https://programmer.smkn1ciamis.id/learnify/assets/img/kelas11.png" class="card-img-top" alt="...">
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 mb-2 d-flex justify-content-center" data-aos-duration="1900"
                        data-aos="fade-left">
                        <a href="https://programmer.smkn1ciamis.id/learnify/user/kelas12">
                            <div class="card-kelas">
                                <img src="https://programmer.smkn1ciamis.id/learnify/assets/img/kelas12.png" class="card-img-top" alt="...">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Class Card -->


    <br>


    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End Animate On Scroll --><!--
@Project: Learnify
@Author/Programmer: Syauqi Zaidan Khairan Khalaf
@URL: syauqi.js.org
Author E-mail: Zaidanline67@Gmail.com

@About-Learnify :
Web Edukasi Open Source yang
dibuat oleh Syauqi Zaidan Khairan Khalaf.
Learnify adalah Web edukasi yang dilengkapi video, materi, dan soal ( Coming soon )
yang didesign semenarik dan sesimple mungkin. Learnify dibuat ditujukan agar para siswa
dan guru dapat terus belajar dan mengajar dimana saja dan kapan saja.
-->


    <!--================ Start footer Area  =================-->
    <footer class="footer-area p_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Tentang Kami</h6>
                        <ul class="list">
                            <li><a href="https://programmer.smkn1ciamis.id/learnify/welcome/tentang">Tentang Learnify</a></li>
                            <li><a href="https://programmer.smkn1ciamis.id/learnify/welcome/materi">Materi Learnify</a></li>
                            <li><a href="https://programmer.smkn1ciamis.id/learnify/welcome/kontak">Kontak Learnify</a></li>
                            <li><a href="http://smkn1ciamis.id/">Website Resmi Sekolah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Masuk - Sign in</h6>
                        <ul class="list">
                            <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Untuk Siswa</a></li>
                            <li><a href="https://programmer.smkn1ciamis.id/learnify/welcome/guru">Untuk Guru</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Pelajaran - Materi</h6>
                        <ul class="list">
                            <li><a href="javaScript:void(0);">IPA</a></li>
                            <li><a href="javaScript:void(0);">Matematika</a></li>
                            <li><a href="javaScript:void(0);">Bahasa Indonesia</a></li>
                            <li><a href="javaScript:void(0);">Bahasa Inggris</a></li>
                            <li><a href="javaScript:void(0);">Pendidikan Agama Islam</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h6 class="footer_title">Tentang Developer</h6>
                        <ul class="list">
                            <li><a href="https://syauqizaidan.github.io">Syauqi Zaidan</a></li>
                            <li><a href="#">Taupik Hidayat</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <h4 class="footer_title">Tentang Learnify</h4>
                    <p>
                        Learnify adalah website pembelajaran dimana para siswa dapat belajar dimana saja dan kapan saja.
                        dan guru dapat mengupload video dirinya sendiri sedang mengajar. sehingga tanpa takut adanya Jam
                        kosong atau pun keadaan yang tidak terduga apapun karena Learnify dapat diakses dimana saja dan
                        kapan saja untuk belajar.
                    </p>
                </div>
            </div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-md-8 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Thank you colorlib for allow me to use this template. <br> Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <span class="text-danger"> &#10084;</span> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a> <br>
                    Made with <span class="text-danger"> &#10084;</span> by syaauqi
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-4 footer-social">
                    <a href="https://www.facebook.com/zaidan.syauqi.9"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/syauqykhairan"><i class="fa fa-twitter"></i></a>
                    <a href="https://dribbble.com/syauqyzaidan"><i class="fa fa-dribbble"></i></a>
                    <a href="https://www.behance.net/syaauqizaaidan"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Start Login Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-dark font-weight-bold" style="color:#212529 !important;"
                        id="exampleModalCenterTitle">
                        Learnify - Masuk Sekarang</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <br>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="https://programmer.smkn1ciamis.id/learnify/assets/img/modal-login-2.png"
                                    class="img-fluid img-responsive mx-auto " style="height: 350px;">
                            </div>
                            <div class=" col-md-6">
                                <form action="https://programmer.smkn1ciamis.id/learnify/welcome/validateLogin" method="post">
                                    <div class="form-group">
                                        <label class="label-font" for="
                                        exampleFormControlInput1">
                                            Email</label>
                                        <input type="text" value="" class="form-control"
                                            name="email" autocomplete="off" id="email"
                                            placeholder="Masukan email mu disini ..">
                                        <small class="text-danger"></small>
                                    </div>
                                    <div class="form-group">
                                        <label class="label-font" for="
                                        exampleFormControlInput1">
                                            Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Masukan password mu disini ..">
                                        <small class="text-danger"></small>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Ingat saya.
                                        </label>
                                    </div>
                                    <p class="terms">Dengan login anda
                                        menyetujui
                                        <i>privasi dan persyaratan ketentuan
                                            hukum kami </i> .
                                        belum punya akun? daftar <a href=" https://programmer.smkn1ciamis.id/learnify/user/registration">
                                            disini.</a>
                                    </p>
                                    <button class="btn btn-block font-weight-bold"
                                        style="background-color: #4dbf1c;color:white;font-size:18px;">Login
                                        Sekarang!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Modal -->


    <!-- Sweetaler Flashdata -->

    <script src="https://programmer.smkn1ciamis.id/learnify/assets/js/stellar.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/vendors/popup/jquery.magnific-popup.min.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/vendors/counter-up/jquery.counterup.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/js/mail-script.js"></script>
    <script src="https://programmer.smkn1ciamis.id/learnify/assets/js/theme.js"></script>
</body>

</html>