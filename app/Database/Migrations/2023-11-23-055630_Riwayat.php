<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Riwayat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pasien' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'tgl_periksa' => [
                'type'           => 'DATE',
            ],
            'tinggi' => [
                'type' => 'FLOAT',
            ],
            'berat' => [
                'type' => 'FLOAT',
            ],
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint'     => 255,
            ],
        ]);
        $this->forge->addKey('id_pasien', true);
        $this->forge->createTable('riwayat');
    }

    public function down()
    {
        $this->forge->dropTable('riwayat');
    }
}
