<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();

        // Set session jika belum ada
        if (!$session->has('current_page')) {
            $session->set('current_page', 'home');
        }

        // Ambil session
        $currentPage = $session->get('current_page');

        // Memuat view dengan data
        return view('home', ['currentPage' => $currentPage]);
    }
}
