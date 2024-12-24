<?php

namespace App\Models;

use CodeIgniter\Model;

class ChartModel extends Model
{
    protected $table = "chart";
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';

    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';
    protected $dataFormat = 'datetime';
    protected $allowedFields = ['id', 'bulan', 'jumlah'];


    public function getGrafik()
    {
        return $this->db->table('chart')->get()->getResultArray();
    }
}
