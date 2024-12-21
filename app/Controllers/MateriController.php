<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\GuruModel;

class MateriController extends BaseController
{
    /**
     * Menampilkan daftar materi
     */
    public function index()
    {
        $materiModel = new MateriModel();
        $data['materi'] = $materiModel->findAll(); // Mengambil semua data materi
        return view('materi/materi_view', $data);
    }

    /**
     * Menampilkan form tambah materi
     */
    public function add()
    {
        $guruModel = new GuruModel();
        $data['guru'] = $guruModel->findAll();
        return view('materi/tambah_materi_view', $data);
    }

    public function tambah()
    {
        $guruModel = new GuruModel();
        $data['guru'] = $guruModel->findAll();
        $data['title'] = 'Tambah Data Guru';
        echo view('materi/tambah_materi_view', $data);
    }

    /**
     * Menyimpan data materi baru
     */
    public function save()
    {
        $materiModel = new MateriModel();

        // Validasi input
        if (!$this->validate([
            'guru' => 'required',
            'kelas' => 'required',
            'mapel' => 'required',
            'deskripsi' => 'required',
            'video' => 'uploaded[video]|mime_in[video,video/mp4,video/mkv]|max_size[video,10240]', // Maksimal 10MB
        ])) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        // Proses upload video
        $video = $this->request->getFile('video');
        if ($video->isValid() && !$video->hasMoved()) {
            $videoName = $video->getRandomName();
            $video->move('uploads/videos/', $videoName); // Menyimpan video di folder uploads/videos/
        } else {
            return redirect()->back()->with('error', 'Gagal mengupload video.');
        }

        // Simpan data ke database
        $data = [
            'nama_lengkap' => $this->request->getPost('guru'),
            'mapel' => $this->request->getPost('mapel'),
            'video' => $videoName,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kelas' => $this->request->getPost('kelas'),
        ];

        $materiModel->saveMateri($data);
        echo '<script>
                alert("Tambah Materi Sukses");
                window.location="' . base_url('/materi') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new MateriModel;
        $getGuru = $model->getMateri($id)->getRow();
        if (isset($getGuru)) {
            $model->hapusMateri($id);
            echo '<script>
                    alert("Hapus Data Materi Sukses");
                    window.location="' . base_url('/materi') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Hapus Gagal!, ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('/materi') . '"
                </script>';
        }
    }


    public function edit($id)
    {
        $materiModel = new MateriModel();
        $guruModel = new GuruModel();
        $data['materi'] = $materiModel->find($id);
        $data['guru'] = $guruModel->findAll();

        if ($data['materi']) {
            return view('materi/edit_materi_view', $data);
        } else {
            return redirect()->to('/materi')->with('error', 'Materi tidak ditemukan.');
        }
    }

    /**
     * Memperbarui data materi
     */
    public function update($id)
    {
        $materiModel = new MateriModel();

        // Validasi input
        if (!$this->validate([
            'guru' => 'required',
            'kelas' => 'required',
            'mapel' => 'required',
            'deskripsi' => 'required',
            'video' => 'mime_in[video,video/mp4,video/mkv]|max_size[video,10240]', // Maksimal 10MB
        ])) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        // Proses upload video jika ada
        $video = $this->request->getFile('video');
        if ($video && $video->isValid() && !$video->hasMoved()) {
            $materi = $materiModel->find($id);
            if ($materi && file_exists('uploads/videos/' . $materi['video'])) {
                unlink('uploads/videos/' . $materi['video']);
            }

            $videoName = $video->getRandomName();
            $video->move('uploads/videos/', $videoName); // Menyimpan video di folder uploads/videos/
        } else {
            $videoName = $this->request->getPost('old_video');
        }

        // Perbarui data di database
        $data = [
            'id' => $id,
            'nama_lengkap' => $this->request->getPost('guru'),
            'mapel' => $this->request->getPost('mapel'),
            'video' => $videoName,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'kelas' => $this->request->getPost('kelas'),
        ];

        $materiModel->saveMateri($data);
        echo '<script>
                alert("Edit Materi Sukses");
                window.location="' . base_url('/materi') . '"
            </script>';
    }
}
