<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table = 'tbl_ktp';
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';
    protected $dataFormat = 'datetime';
    protected $allowedFields = ['provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'nama', 'kk', 'nik', 'alamat', 'jenis_permohonan', 'status'];

    public function getLayanan($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM tbl_ktp WHERE id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array
        $data = $query->getResultArray();
        // Kembalikan hasil kueri ke kontroller
        return $data;
    }

    public function getGrafik()
    {
        return $this->db->table('aduan')->get()->getResultArray();
    }
}
