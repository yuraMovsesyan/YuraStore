<?php

namespace App\Controllers;

use App\Models\AppModel;
use CodeIgniter\Controller;

class Main extends Controller
{
	public function index()
	{
        $model = new AppModel();
        

        $data = [
            'content'  => $model->getApps(),
            'title' => 'Yura.Store',
        ];

        

		echo view('pattern/header', $data);
		echo view('pages/main', $data);
		echo view('pattern/footer');
	}
}
