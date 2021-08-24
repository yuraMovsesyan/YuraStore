<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{
    private function authorized(){
        if (!session()->has('social_id'))
            return redirect()->to(base_url());
    }

    private function template_view($url = 'pages/main', $title = 'Home', $data = null){
        $this->authorized();
        $header = [
            'title' => $title,
        ];
        echo view('pattern/header', $header);
        if (is_null($data))
		    echo view($url);
        else
            echo view($url, $data);
		echo view('pattern/footer');
    }

	public function profile()
	{
        $user = session()->get();
        $this->template_view('pages/profile', 'Profile', $user);
	}

    public function Tools(){
        $this->template_view('pages/tools');
    }
}
