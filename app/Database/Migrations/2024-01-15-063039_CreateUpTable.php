<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUpTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_up' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ], 
            'nama_up' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
            ], 
        ]); 

        $this->forge->addKey('id_up', true, true);
        $this->forge->createTable('data_up'); 
    }

    public function down()
    {
        $this->forge->dropTable('data_up', true); 
    }
}
