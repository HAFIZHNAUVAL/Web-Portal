<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $dataFormat = 'datetime';
    protected $allowedFields = ['judul', 'name', 'image', 'tanggal', 'deskripsi', 'nm_di', 'kab', 'prov',];

    public function getBerita($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM berita WHERE id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array
        $data = $query->getResultArray();
        // Kembalikan hasil kueri ke kontroller
        return $data;
    }

    function search($keyword)
    {
        // $builder = $this->table('aduan');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('berita')->like('name', $keyword);
    }
}
