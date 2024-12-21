<?php

namespace App\Controllers;

use App\Models\GuruModel;

class GuruController extends BaseController
{
    public function index()
    {
        $model = new GuruModel;
        $data['title']     = 'Data Guru';
        $data['getGuru'] = $model->getGuru();
        // echo view('guru/header_view', $data);
        echo view('guru/guru_view', $data);
        // echo view('guru/footer_view', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Guru';
        // echo view('guru/header_view', $data);
        echo view('guru/tambah_guru_view', $data);
        // echo view('guru/footer_view', $data);
    }

    public function add()
    {
        $model = new GuruModel;
        $data = array(
            'nip' => $this->request->getPost('nip'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'mapel' => $this->request->getPost('mapel')
        );
        $model->saveGuru($data);
        echo '<script>
                alert("Sukses Tambah Data Guru");
                window.location="' . base_url('/guru') . '"
            </script>';
    }

    public function edit($nip)
    {
        $model = new GuruModel;
        $data['title'] = 'Edit Data Guru';
        $data['getGuru'] = $model->getGuru($nip)->getRow();
        if (isset($data['getGuru'])) {
            // echo view('guru/header_view', $data);
            echo view('guru/edit_guru_view', $data);
            // echo view('guru/footer_view', $data);
        } else {
            echo '<script>
                    alert("NIP tidak ditemukan");
                    window.location="' . base_url('/guru') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new GuruModel;
        $nip = $this->request->getPost('nip');
        $data = array(
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'mapel' => $this->request->getPost('mapel')
        );
        $model->editGuru($data, $nip);
        echo '<script>
                alert("Sukses Update Data Guru");
                window.location="' . base_url('/guru') . '"
            </script>';
    }

    public function hapus($nip)
    {
        $model = new GuruModel;
        $getGuru = $model->getGuru($nip)->getRow();
        if (isset($getGuru)) {
            $model->hapusGuru($nip);
            echo '<script>
                    alert("Hapus Data Pengajar Sukses");
                    window.location="' . base_url('/guru') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Hapus Gagal!, NIP Pengajar ' . $nip . ' Tidak ditemukan");
                    window.location="' . base_url('/guru') . '"
                </script>';
        }
    }
}
