<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOcrTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_relay' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true,
            ],
            'id_ocr' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ],
            'ocr_arus_1' => [ 
                'type'              => 'FLOAT', 
                'constraint'        => 4,
                'null'              => true,
            ], 
            'ocr_tms' => [ 
                'type'              => 'FLOAT', 
                'constraint'        => 4,
                'null'              => true,
            ], 
            'ocr_curva_1' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 3,
                'null'              => true,
            ], 
            'ocr_arus_2' => [ 
                'type'              => 'FLOAT', 
                'null'              => true,
            ], 
            'ocr_td' => [ 
                'type'              => 'FLOAT', 
                'constraint'        => 4,
                'null'              => true,
            ], 
            'ocr_curva_2' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 3,
                'null'              => true,
            ], 
        ]); 

        $this->forge->addKey('id_ocr', true, true);
        $this->forge->addForeignKey('id_relay','data_relay_proteksi','id_relay','CASCADE', 'CASCADE');
        $this->forge->createTable('data_ocr'); 
    }

    public function down()
    {
        $this->forge->dropTable('data_ocr', true); 
    }
}
