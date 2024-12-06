<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function home()
    {
        // Cek apakah user sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('/login'));
        }

        $data = [
            'title' => 'Home User',
            'name' => session()->get('name'), // Ambil nama dari session
        ];

        return view('user/home_user', $data);
    }
}
