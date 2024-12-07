<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    // protected $table = 'materi';

    // public function getMateri($id = false)
    // {
    //     if ($id === false) {
    //         return $this->findAll();
    //     } else {
    //         return $this->getWhere(['id' => $id]);
    //     }
    // }

    // public function saveMateri($data)
    // {
    //     $query = $this->db->table($this->table)->insert($data);
    //     return $query;
    // }

    // public function editMateri($data, $id)
    // {
    //     $query = $this->db->table($this->table)->update($data, ['id' => $id]);
    //     return $query;
    // }

    // public function hapusMateri($id)
    // {
    //     $query = $this->db->table($this->table)->delete(['id' => $id]);
    //     return $query;
    // }

    protected $table = 'materi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_lengkap',
        'mapel',
        'video',
        'deskripsi',
        'kelas'
    ];
}
