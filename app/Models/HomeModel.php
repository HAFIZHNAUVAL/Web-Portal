<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'home';
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';
    protected $dataFormat = 'datetime';
    protected $allowedFields = ['judul', 'judul1', 'judul2', 'image', 'faq1', 'faq2', 'faq3', 'kategori'];

    public function getHome($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM home WHERE id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array
        $data = $query->getResultArray();
        // Kembalikan hasil kueri ke kontroller
        return $data;
    }
}
