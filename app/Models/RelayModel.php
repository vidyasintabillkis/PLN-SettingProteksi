<?php

namespace App\Models;

use CodeIgniter\Model;

class RelayModel extends Model
{
    protected $table            = 'data_relay_proteksi';
    protected $primaryKey       = 'id_relay';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_ulp', 'id_penyulang', 'nama_relay', 'status_relay', 'nama_keypoint', 'merk_relay', 'type_relay', 'seri_relay', 'tahun_relay', 'umur_relay', 'com_relay', 'rasio_ct_primer', 'rasio_ct_sekunder'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public function insertData($data)
    {
        $umurRelay = $this->calculateUmurRelay($data['tahun_relay']);
        $data['umur_relay'] = $umurRelay;
        
        $this->insert($data);
    }

    public function updateData($id, $data)
    {
        $this->where('id_relay', $id)->set($data)->update();
    }

    public function deleteData($id)
    {
        $this->where('id_relay', $id)->delete();
    }

    protected function calculateUmurRelay($tahunRelay)
    {
        return (new \DateTime())->diff(new \DateTime($tahunRelay))->y;
    }
}
