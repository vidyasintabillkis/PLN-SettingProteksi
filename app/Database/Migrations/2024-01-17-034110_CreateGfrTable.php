<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGfrTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_relay' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true,
            ],
            'id_gfr' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ],
            'gfr_arus_1' => [ 
                'type'              => 'FLOAT', 
                'constraint'        => 3,
                'null'              => true,
            ], 
            'gfr_tms' => [ 
                'type'              => 'FLOAT', 
                'null'              => true,
            ], 
            'gfr_curva_1' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 3,
                'null'              => true,
            ], 
            'gfr_arus_2' => [ 
                'type'              => 'FLOAT',
                'null'              => true,
            ], 
            'gfr_td' => [ 
                'type'              => 'FLOAT', 
                'constraint'        => 4,
                'null'              => true,
            ], 
            'gfr_curva_2' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 3,
                'null'              => true,
            ],
        ]); 

        $this->forge->addKey('id_gfr', true, true);
        $this->forge->addForeignKey('id_relay','data_relay_proteksi','id_relay','CASCADE', 'CASCADE');
        $this->forge->createTable('data_gfr'); 
    }

    public function down()
    {
        $this->forge->dropTable('data_gfr', true); 
    }
}
