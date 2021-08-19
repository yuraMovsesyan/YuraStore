<?php

namespace App\Controllers\Profile;

use CodeIgniter\Controller;
use App\Models\AppModel;

class Authorization extends Controller
{
	public function index()
        {
                $config = config('SocialNetwork');

                $config_data = $config->get_data("fb");


                echo "<a target='_blank' href='https://www.facebook.com/v11.0/dialog/oauth?client_id=".$config_data['id']."&redirect_uri=".$config_data['url']."&response_type=code&scope=public_profile,email' >FB login</a>";
	}

        public function facebook()
	{
                if (!isset($_GET['code'])){
                        return 'error code';
                }

                $config = config('SocialNetwork');

                $config_data = $config->get_data("fb");

                $token = json_decode(file_get_contents('https://graph.facebook.com/v11.0/oauth/access_token?client_id='.$config_data['id'].'&redirect_uri='.$config_data['url'].'&client_secret='.$config_data['secret'].'&code='.$_GET['code']), true);

                if (!$token){
                        return "error token";
                }

                $data = json_decode(file_get_contents('https://graph.facebook.com/v11.0/me?client_id='.$config_data['id'].'&redirect_uri='.$config_data['url'].'&client_secret='.$config_data['secret'].'&code='.$_GET['code'].'&access_token='.$token['access_token'].'&fields=id,name,email'), true);

                $data['avatar'] = 'https://graph.facebook.com/v11.0/'.$data['id'].'/picture?width=200&height=200';
                if (!$data){
                        return "error token";
                }
                echo "<pre>";
                var_dump($data);
                echo "</pre>";
        }
}
