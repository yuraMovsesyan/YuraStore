<?php

namespace App\Controllers\Profile;

use CodeIgniter\Controller;
use App\Models\AppModel;

class Authorization extends Controller
{
	public function index()
	{
        echo "Authorization";
	}

    public function facebook()
	{
        echo "facebook";
        $config = config('SocialNetwork');

        $id = $config->get_data("fb")['id'];

        echo $id;
	}
}
