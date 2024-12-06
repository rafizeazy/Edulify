<?php

namespace App\Controllers;

use App\Models\MateriModel;

class MateriController extends BaseController
{
    public function index()
    {
        $model = new MateriModel;
        $data['title']     = 'Data Materi';
        $data['getMateri'] = $model->getMateri();
        // echo view('guru/header_view', $data);
        echo view('materi/materi_view', $data);
        // echo view('guru/footer_view', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Materi';
        // echo view('guru/header_view', $data);
        echo view('materi/tambah_materi_view', $data);
        // echo view('guru/footer_view', $data);
    }

    public function add()
    {
        $model = new MateriModel;
        $data = array(
            'nip' => $this->request->getPost('nip'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'mapel' => $this->request->getPost('mapel')
        );
        $model->saveGuru($data);
        echo '<script>
                alert("Sukses Tambah Data Barang");
                window.location="' . base_url('/guru') . '"
            </script>';
    }

    public function edit($nip)
    {
        $model = new MateriModel;
        $data['title'] = 'Edit Data Materi';
        $data['getMateri'] = $model->getMateri($nip)->getRow();
        if (isset($data['getMateri'])) {
            // echo view('guru/header_view', $data);
            echo view('materi/edit_materi_view', $data);
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
        $model = new MateriModel;
        $nip = $this->request->getPost('nip');
        $data = array(
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'mapel' => $this->request->getPost('mapel')
        );
        $model->editGuru($data, $nip);
        echo '<script>
                alert("Sukses Update Data Materi");
                window.location="' . base_url('/guru') . '"
            </script>';
    }

    public function hapus($nip)
    {
        $model = new MateriModel;
        $getMateri = $model->getMateri($nip)->getRow();
        if (isset($getMateri)) {
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
