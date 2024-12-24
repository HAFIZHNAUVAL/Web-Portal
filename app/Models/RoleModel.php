<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];


    // Add any necessary functions for user handling, e.g., registerUser, getUserByUsername, etc.
}
