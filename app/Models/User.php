<?php

namespace App\Models;

class User extends \CodeIgniter\Model
{
    protected $allowedFields = ['username', 'email', 'role', 'pw','lastname','firstname'];
    protected $table = "user";
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
}