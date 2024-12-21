<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'name',
        'email'
    ];

    public function getSiswa($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveSiswa($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function editSiswa($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, ['id' => $id]);
        return $query;
    }

    public function hapusSiswa($id)
    {
        $query = $this->db->table($this->table)->delete(['id' => $id]);
        return $query;
    }
}
