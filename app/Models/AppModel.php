<?php

namespace App\Models;

use CodeIgniter\Model;

class AppModel extends Model
{
    protected $table = 'application';

    protected $allowedFields = ['title', 'description', 'poster', 'categories', 'images', 'video', 'download'];

    public function getApps($id = FALSE)
    {
        if ($id === false)
        {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['id' => $id])
                    ->first();
    }
}
