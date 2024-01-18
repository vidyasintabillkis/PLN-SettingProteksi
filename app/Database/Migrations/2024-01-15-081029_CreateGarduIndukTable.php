<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGarduIndukTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gardu_induk' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ], 
            'nama_gardu_induk' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
            ], 
        ]); 

        $this->forge->addKey('id_gardu_induk', true, true);
        $this->forge->createTable('data_gardu_induk'); 
    }

    public function down()
    {
        $this->forge->dropTable('data_gardu_induk', true); 
    }
}
