<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        if ($this->isLoggedIn()) {
            return redirect()->to(base_url('dashboard'));
        }

        $data = [
            'title' => 'Login | Learnify'
        ];

        return view('auth/login', $data);
    }

    public function login()
    {
        $data = $this->request->getPost(['email', 'password']);

        if (!$this->validateData($data, [
            'email' => 'required',
            'password' => 'required',
        ])) {
            return $this->index();
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->model->where('email', $email)->first();

        if (!$user) {
            session()->setFlashdata('error', 'Email atau password salah.');
            return redirect()->back();
        }

        if (!password_verify($password, $user['password'])) {
            session()->setFlashdata('error', 'Email atau password salah.');
            return redirect()->back();
        }

        // Simpan data pengguna di session
        $userData = [
            'name' => $user['name'],
            'email' => $user['email'],
            'role' => $user['role'], // Pastikan kolom role ada di tabel
            'logged_in' => true,
        ];
        session()->set($userData);

        // Arahkan berdasarkan role
        if ($user['role'] === 'admin') {
            return redirect()->to(base_url('dashboard'));
        } else {
            return redirect()->to(base_url('user/home_user'));
        }
    }


    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }

        return false;
    }
}
