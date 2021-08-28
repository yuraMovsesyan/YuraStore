<?php

namespace App\Controllers;

use App\Models\AppModel;
use CodeIgniter\Controller;

class App extends Controller
{
    public function app($id = null){
        $model = new AppModel();
        $app = $model->getApps($id);
        $app['images'] = json_decode($app['images'], true);
        $data = [
            'content'  => $app,
            'recommendation'  => $model->getApps(),
            'title' => 'Yura.Store',
        ];

		echo view('pattern/header', $data);
		echo view('pages/app', $data);
		//echo view('pages/comments', $data);
		echo view('pattern/footer');
    }

    public function add(){
        if (isset($_GET)){

            $model = new AppModel();
            echo "<pre>";
            var_dump($_GET);
            echo "</pre>";

            $app = [
                'title' => $_GET['title'],
                'description' => $_GET['description'],
                'poster' => $_GET['poster'],
                'video' => $_GET['video'],
                'images' => json_encode($_GET['images']),
                'download' => $_GET['download']['windows'],
            ];

            echo "<pre>";
            var_dump($app);
            echo "</pre>";

            $model->insert($app);
        }
        return "add";
    }
}
