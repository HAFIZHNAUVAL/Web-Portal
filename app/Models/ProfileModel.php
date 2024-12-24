<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'profile';
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';
    protected $dataFormat = 'datetime';
    protected $allowedFields = ['user_id',  'gender', 'tempat_lahir', 'tanggal_lahir', 'nik', 'nama', 'negara', 'alamat',  'image'];


    public function getProfile($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM profile WHERE user_id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array
        $data = $query->getResultArray();
        // Kembalikan hasil kueri ke kontroller
        return $data;
    }
    function getData($userId)
    {

        return $this->where('user_id', $userId)
            ->findAll();
    }

    function search($keyword)
    {
        // $builder = $this->table('aduan');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('profile')->like('nama', $keyword);
    }
}
