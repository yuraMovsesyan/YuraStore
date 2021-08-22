<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['social_network', 'social_id', 'name', 'avatar', 'email', 'reg_date', 'update_date'];


    public function get_social_user($social_id)
    {
        return $this->asArray()
                    ->where(['social_id' => $social_id])
                    ->first();
    }
}
