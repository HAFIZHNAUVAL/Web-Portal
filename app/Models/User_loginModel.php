<?php

namespace App\Models;

use CodeIgniter\Model;

class User_loginModel extends Model
{
    protected $table = 'userss';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email',   'password',  'role'];
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $createdField = 'create_at';
    // protected $createField = 'create_att';
    protected $updatedField = 'update_at';
    // protected $dataFormat = 'datetime';
    protected $dataFormat = 'timestamp';


    // public function login($post)
    // {
    //     $this->db->select('*');
    //     $this->db->from('userss');
    // }


    // Add any necessary functions for user handling, e.g., registerUser, getUserByUsername, etc.

    public function getRegister($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM userss WHERE id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array
        $data = $query->getResultArray();
        // Kembalikan hasil kueri ke kontroller
        return $data;
    }

    public function getProfile($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM userss WHERE id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array
        $data = $query->getResultArray();
        // Kembalikan hasil kueri ke kontroller
        return $data;
    }

    public function getAlluser($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM userss WHERE id='$id'";
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

        return $this->table('userss')->like('username', $keyword);
    }

    function cari($keyword)
    {
        // $builder = $this->table('aduan');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('userss')->like('username', $keyword);
    }

    public function getLatestProfiles()
    {
        return $this->db->table('userss')->orderBy('create_at', 'DESC')->get()->getResult();
    }
}
