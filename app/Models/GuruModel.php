<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'nip';
    protected $allowedFields = [
        'nip',
        'nama_lengkap',
        'email',
        'mapel'
    ];

    public function getGuru($nip = false)
    {
        if ($nip === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['nip' => $nip]);
        }
    }

    public function saveGuru($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function editGuru($data, $nip)
    {
        $query = $this->db->table($this->table)->update($data, ['nip' => $nip]);
        return $query;
    }

    public function hapusGuru($nip)
    {
        $query = $this->db->table($this->table)->delete(['nip' => $nip]);
        return $query;
    }
}
