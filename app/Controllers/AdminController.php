<?php

namespace App\Controllers;

use App\Models\UserModel;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $email = session()->get('email');
        if ($email !== 'admin@gmail.com') {
            return redirect()->to(base_url('dashboard'));
        }
        return view('dashboard'); // Tampilkan dashboard admin
    }
}
