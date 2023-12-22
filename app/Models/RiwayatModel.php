<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    protected $table = 'riwayat';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_posyandu', 'id_pasien', 'tgl_periksa', 'tinggi', 'berat', 'keterangan'];

    public function getPasieni($id_pasien = false)
    {
        if ($id_pasien == false) {
            return $this->findAll();
        }

        return $this->where(['id_pasien' => $id_pasien])->first();
    }
}
