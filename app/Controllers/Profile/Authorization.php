<?php

namespace App\Controllers\Profile;

use CodeIgniter\Controller;
use App\Models\AppModel;

class Authorization extends Controller
{
	public function index()
        {
                $config = config('SocialNetwork');

                //facebook link
                $config_data = $config->get_data("facebook");
                echo "<a target='_blank' href='https://www.facebook.com/v11.0/dialog/oauth?client_id=".$config_data['id']."&redirect_uri=".$config_data['url']."&response_type=code&scope=public_profile,email' >FB login</a>";

                echo "<br />";
                //discord link
                $config_data = $config->get_data("discord");
                $params = array(
                        'client_id' => $config_data['id'],
                        'redirect_uri' => $config_data['url'],
                        'response_type' => 'code',
                        'scope' => 'identify guilds'
                );
                echo "<a target='_blank' href='https://discord.com/api/oauth2/authorize?".http_build_query($params)."' >DISCORD login</a>";

	}

        public function facebook()
	{
                if (!isset($_GET['code'])){
                        return 'error code';
                }

                $config = config('SocialNetwork');

                $config_data = $config->get_data("facebook");

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

        public function discord()
        {
                if (!isset($_GET['code'])){
                        return 'error code';
                }

                $config = config('SocialNetwork');

                $config_data = $config->get_data("discord");

                $params = http_build_query(
                        array(
                                'client_id' => $config_data['id'],
                                'client_secret' => $config_data['secret'],
                                'grant_type' => 'authorization_code',
                                'code' => $_GET['code'],
                                'redirect_uri' => $config_data['url']
                        )
                );

                $opts = array('http' =>
                        array(
                                'method'  => 'POST',
                                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                                'content' => $params
                        )
                );

                $context  = stream_context_create($opts);
                
                $token = json_decode(file_get_contents('https://discord.com/api/oauth2/token', false, $context), true);

                $opts = array('http' =>
                        array(
                                'method'  => 'GET',
                                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                                'content' => $params
                        )
                );

                $context  = stream_context_create($opts);

                $user = json_decode(file_get_contents('https://discordapp.com/api/v6/users/@me'), true);


                var_dump($user);




        }
}
