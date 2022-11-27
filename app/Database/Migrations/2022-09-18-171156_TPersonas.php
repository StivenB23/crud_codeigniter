<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TPersonas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idpeople' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'numberDocument' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
            ,
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lastname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'age' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sex' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ]
        ]);
        $this->forge->addKey('idpeople', true);
        $this->forge->createTable('personas');
    }

    public function down()
    {
        $this->forge->dropTable('personas');
    }
}
