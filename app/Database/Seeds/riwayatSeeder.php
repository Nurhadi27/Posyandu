<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class riwayatSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_posyandu' => 3,
                'id_pasien' => 1,
                'tgl_periksa'    => '2023-12-27',
                'tinggi'    => 36,
                'berat'    => 4.5,
                'keterangan'    => 'Bayi Sakit'
            ],

            [
                'id_posyandu' => 4,
                'id_pasien' => 1,
                'tgl_periksa'    => '2024-01-27',
                'tinggi'    => 37,
                'berat'    => 5,
                'keterangan'    => 'Bayi sehat'
            ]
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('riwayat')->insertBatch($data);
    }
}
