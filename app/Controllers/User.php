<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{
	public function profile()
	{

        $data = [
            'title' => 'Profile',
        ];

        
        if (!session()->has('social_id'))
            return redirect()->to(base_url());


        $user = session()->get();


		echo view('pattern/header', $data);
		echo view('pages/profile', $user);
		echo view('pattern/footer');
	}
}
