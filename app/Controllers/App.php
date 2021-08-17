<?php

namespace App\Controllers;

use App\Models\AppModel;
use CodeIgniter\Controller;

class App extends Controller
{
    public function app($id = null){
        $model = new AppModel();
        

        $data = [
            'content'  => $model->getApps($id),
            'title' => 'Yura.Store',
        ];

		echo view('pattern/header', $data);
		echo view('pages/app', $data);
		echo view('pages/comments', $data);
		echo view('pattern/footer');
    }
}
