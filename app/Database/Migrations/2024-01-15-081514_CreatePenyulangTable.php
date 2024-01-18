<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenyulangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gardu_induk' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true,
            ],
            'id_penyulang' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ],
            'nama_penyulang_lama' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
            ], 
            'nama_penyulang_baru' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 50,
                'null'              => true,
            ], 
            'kapasitas_trafo' => [ 
                'type'              => 'INT', 
                'constraint'        => 3,
            ], 
        ]); 

        $this->forge->addKey('id_penyulang', true, true);
        $this->forge->addForeignKey('id_gardu_induk','data_gardu_induk','id_gardu_induk','CASCADE', 'CASCADE');
        $this->forge->createTable('data_penyulang'); 
    }

    public function down()
    {
        $this->forge->dropTable('data_penyulang', true); 
    }
}
