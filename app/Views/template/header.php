<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KlikBelajar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
        rel="stylesheet" />
</head>

<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div
            class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-red-600">KlikBelajar</div>
            <div class="hidden md:flex space-x-8">
                <a class="text-gray-800 hover:text-gray-600" href="<?= base_url('/') ?>">Tentang Kami</a>
                <a class="text-gray-800 hover:text-gray-600" href="<?= base_url('/') ?>">Program Unggulan</a>
                <a class="text-gray-800 hover:text-gray-600" href="<?= base_url('/') ?>">Fitur Layanan</a>
                <a class="text-gray-800 hover:text-gray-600" href="<?= base_url('/') ?>">Testimoni</a>
                <a class="text-gray-800 hover:text-gray-600" href="<?= base_url('/') ?>">FAQ</a>
            </div>
            <a
                class="bg-green-500 text-white px-4 py-2 rounded-full hidden md:block"
                href="<?= base_url('login') ?>">Login</a>

            <!-- Hamburger Menu Button for Mobile -->
            <button class="md:hidden text-gray-800" id="menu-button">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden">
            <div class="flex flex-col space-y-4 px-4 py-2">
                <a class="text-gray-800 hover:text-gray-600" href="#tentang-kami">Tentang Kami</a>
                <a class="text-gray-800 hover:text-gray-600" href="#program-unggulan">Program Unggulan</a>
                <a class="text-gray-800 hover:text-gray-600" href="#fitur-layanan">Fitur Layanan</a>
                <a class="text-gray-800 hover:text-gray-600" href="#testimoni">Testimoni</a>
                <a class="text-gray-800 hover:text-gray-600" href="#faq">FAQ</a>
                <a
                    class="bg-green-500 text-white px-4 py-2 rounded-full"
                    href="<?= base_url('login') ?>">Login</a>
            </div>
        </div>
    </nav>