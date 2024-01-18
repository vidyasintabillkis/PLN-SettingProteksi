<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUlpTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_up' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true,
            ], 
            'id_ulp' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ], 
            'nama_ulp' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
            ], 
        ]); 

        $this->forge->addKey('id_ulp', true, true);
        $this->forge->addForeignKey('id_up','data_up','id_up','CASCADE', 'CASCADE');
        $this->forge->createTable('data_ulp'); 
    }

    public function down()
    {
        $this->forge->dropTable('data_ulp', true); 
    }
}
