<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = "user";
    protected $useTimestamps = true;
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'password'];

    public function getDataUser($where = false)
    {
        if ($where = false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            return $query = $builder->get();
        }
    }

    public function get_data($username, $password)
    {
        return $this->db->table('user')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
