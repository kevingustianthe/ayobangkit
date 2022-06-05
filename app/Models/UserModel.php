<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'coba_users';
    protected $primaryKey = 'user_id';
    protected $returnType = "object";
    protected $allowedFields = ['username', 'email', 'password'];

    public function getUser($email)
    {
        return $this->where(['email' => $email])->first();
    }
}
