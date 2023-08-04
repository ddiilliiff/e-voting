<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelDistrik extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_distrik' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_distrik' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_distrik', true);
        $this->forge->createTable('tabel_distrik');
    }

    public function down()
    {
        $this->forge->dropTable('tabel_distrik');
    }
}
