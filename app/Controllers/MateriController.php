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

        $materiModel->save($data);

        return redirect()->to('/materi')->with('success', 'Materi berhasil ditambahkan.');
    }
}
