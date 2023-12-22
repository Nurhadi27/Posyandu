<?php

namespace App\Models;

use CodeIgniter\Model;

class PosyanduModel extends Model
{
    protected $table = 'pasien';
    protected $useTimestamps = true;
    protected $allowedFields = ['call', 'id_pasien', 'nama', 'tanggal_lahir', 'alamat', 'nama_bapak', 'nama_ibu'];

    public function getPasien($call = false)
    {
        if ($call == false) {
            return $this->findAll();
        } else if ($call == true) {
            $builder = $this->db->table('pasien');
            $builder->join('riwayat', 'riwayat.id_pasien = pasien.id_pasien');
            $builder->where('call', $call);
            $query = $builder->get();
            return $query->getResult();
        }
    }

    public function getPasieni($id_pasien = false)
    {
        if ($id_pasien == false) {
            return $this->findAll();
        }

        return $this->where(['id_pasien' => $id_pasien])->first();
    }
}
