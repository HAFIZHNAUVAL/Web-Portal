<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuansModel extends Model
{
    protected $table = 'pengajuan';
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';
    protected $dataFormat = 'datetime';
    protected $allowedFields = ['user_id', 'nama', 'gender', 'tempat_lahir', 'tanggal_lahir', 'negara', 'agama', 'status_perkawinan', 'nik', 'pekerjaan', 'alamat', 'jenis_pengajuan', 'image', 'status', 'tanggapan', 'berkas'];

    public function getLayananUser($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM pengajuan WHERE id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array
        $data = $query->getResultArray();
        // Kembalikan hasil kueri ke kontroller
        return $data;
    }
    function dataLayanan($userId)
    {

        return $this->where('user_id', $userId)
            ->findAll();
    }

    function search($cari)
    {
        // $builder = $this->table('aduan');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('pengajuan')->like('nama', $cari);
    }
    public function getGrafik()
    {
        return $this->db->table('pengajuan')->get()->getResultArray();
    }
}
