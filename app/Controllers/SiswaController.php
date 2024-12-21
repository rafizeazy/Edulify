<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class SiswaController extends BaseController
{
    public function index()
    {
        $model = new SiswaModel;
        $data['title']     = 'Data Siswa';
        $data['getSiswa'] = $model->getSiswa();
        // echo view('siswa/header_view', $data);
        echo view('siswa/siswa_view', $data);
        // echo view('siswa/footer_view', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Siswa';
        // echo view('siswa/header_view', $data);
        echo view('siswa/tambah_siswa_view', $data);
        // echo view('siswa/footer_view', $data);
    }

    public function add()
    {
        $model = new SiswaModel;
        $data = array(
            'nis' => $this->request->getPost('nis'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'kelas' => $this->request->getPost('kelas')
        );
        $model->saveSiswa($data);
        echo '<script>
                alert("Sukses Tambah Data Siswa");
                window.location="' . base_url('/siswa') . '"
            </script>';
    }

    public function edit($nis)
    {
        $model = new SiswaModel;
        $data['title'] = 'Edit Data Siswa';
        $data['getSiswa'] = $model->getSiswa($nis)->getRow();
        if (isset($data['getSiswa'])) {
            // echo view('siswa/header_view', $data);
            echo view('siswa/edit_siswa_view', $data);
            // echo view('siswa/footer_view', $data);
        } else {
            echo '<script>
                    alert("NIS tidak ditemukan");
                    window.location="' . base_url('/siswa') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new SiswaModel;
        $nis = $this->request->getPost('nis');
        $data = array(
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'kelas' => $this->request->getPost('kelas')
        );
        $model->editSiswa($data, $nis);
        echo '<script>
                alert("Sukses Update Data Siswa");
                window.location="' . base_url('/siswa') . '"
            </script>';
    }

    public function hapus($nis)
    {
        $model = new SiswaModel;
        $getSiswa = $model->getSiswa($nis)->getRow();
        if (isset($getSiswa)) {
            $model->hapusSiswa($nis);
            echo '<script>
                    alert("Hapus Data Siswa Sukses");
                    window.location="' . base_url('/siswa') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Hapus Gagal!, NIS Siswa ' . $nis . ' Tidak ditemukan");
                    window.location="' . base_url('/siswa') . '"
                </script>';
        }
    }
}
