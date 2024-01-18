<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRelayTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ulp' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true,
            ],
            'id_penyulang' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true,
            ],
            'id_relay' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
                'unsigned'          => true, 
                'auto_increment'    => true, 
            ],
            'nama_relay' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 5,
            ], 
            'status_relay' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 2,
                'null'              => true,
            ],
            'nama_keypoint' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 35,
            ],
            'merk_relay' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 15,
                'null'              => true,
            ],
            'type_relay' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 40,
                'null'              => true,
            ],
            'seri_relay' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 20,
                'null'              => true,
            ], 
            'tahun_relay' => [ 
                'type'              => 'INT',
                'constraint'        => 4,
                'null'              => true,
            ],  
            'umur_relay' => [ 
                'type'              => 'INT',
                'constraint'        => 4,
                'null'              => true,
            ],
            'com_relay' => [ 
                'type'              => 'VARCHAR', 
                'constraint'        => 10,
                'null'              => true,
            ],    
            'rasio_ct_primer' => [ 
                'type'              => 'INT', 
                'constraint'        => 4,
            ], 
            'rasio_ct_sekunder' => [ 
                'type'              => 'INT', 
                'constraint'        => 2,
            ],
        ]); 

        $this->forge->addKey('id_relay', true, true);
        $this->forge->addForeignKey('id_ulp','data_ulp','id_ulp','CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_penyulang','data_penyulang','id_penyulang','CASCADE', 'CASCADE');
        $this->forge->createTable('data_relay_proteksi'); 
    }

    public function down()
    {
        $this->forge->dropTable('data_relay_proteksi', true); 
    }
}
