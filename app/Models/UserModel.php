<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['user_id', 'first_name', 'last_name', 'photo', 'reg_date', 'update_date'];


    public function getUsers($user_id)
    {
        if ($user_id === false)
        {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['user_id' => $user_id])
                    ->first();
    }
}
