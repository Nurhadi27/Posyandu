<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class pasienSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id_pasien' => 2,
            'nama'    => '2023-11-23',
            'tanggal_lahir'    => '2022-11-23',
            'alamat'    => 'Ciawi, Kuningan',
            'nama_bapak'    => 'Syaiful',
            'nama_ibu'    => 'Jennifer',
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('pasien')->insert($data);
    }
}
