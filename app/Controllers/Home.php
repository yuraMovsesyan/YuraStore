<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
        echo session()->get('photo');
		//return view('welcome_message');
	}
}
