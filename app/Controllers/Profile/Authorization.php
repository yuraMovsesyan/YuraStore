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

                echo "<br />";
                //twitch link
                $config_data = $config->get_data("twitch");
                $params = array(
                        'client_id' => $config_data['id'],
                        'redirect_uri' => $config_data['url'],
                        'response_type' => 'code',
                        'scope' => 'user:edit user:read:email'
                );
                echo "<a target='_blank' href='https://id.twitch.tv/oauth2/authorize?".http_build_query($params)."' >twitch login</a>";

                echo "<br />";
                //github link
                $config_data = $config->get_data("github");
                $params = array(
                        'client_id' => $config_data['id'],
                        'redirect_uri' => $config_data['url'],
                        'response_type' => 'code',
                        'scope' => ''
                );
                echo "<a target='_blank' href='https://github.com/login/oauth/authorize?".http_build_query($params)."' >github login</a>";

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

                var_dump($token);

                $ch = curl_init('https://discordapp.com/api/users/@me');
                curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

                $response = curl_exec($ch);

                $headers[] = 'Accept: application/json';

                $headers[] = 'Authorization: Bearer ' . $token['access_token'];

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                $response = curl_exec($ch);
                
                $user = json_decode($response, true);

                echo "<pre>";
                var_dump($user);
                echo "</pre>";

                echo "<img src='https://cdn.discordapp.com/avatars/".$user['id']."/".$user['avatar']."'>";




        }

        public function twitch()
        {
                if (!isset($_GET['code'])){
                        return 'error code';
                }

                $config = config('SocialNetwork');

                $config_data = $config->get_data("twitch");

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
                
                $token = json_decode(file_get_contents('https://id.twitch.tv/oauth2/token', false, $context), true);

                var_dump($token);

                $ch = curl_init('https://api.twitch.tv/helix/users');
                curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

                $response = curl_exec($ch);

                $headers[] = 'Accept: application/json';
                
                $headers[] = 'Client-ID: '.$config_data['id'];

                $headers[] = 'Authorization: Bearer ' . $token['access_token'];

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                $response = curl_exec($ch);
                
                $user = json_decode($response, true);

                echo "<pre>";
                var_dump($user);
                echo "</pre>";
        }

        public function github()
        {
                if (!isset($_GET['code'])){
                        return 'error code';
                }

                $config = config('SocialNetwork');

                $config_data = $config->get_data("github");

                $params = http_build_query(
                        array(
                                'client_id' => $config_data['id'],
                                'client_secret' => $config_data['secret'],
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
                
                $token = json_decode(file_get_contents('https://github.com/login/oauth/access_token', false, $context), true);

                var_dump($token);

                $ch = curl_init('https://api.github.com/user');
                curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

                $response = curl_exec($ch);

                $headers[] = 'Accept: application/json';

                $headers[] = 'Authorization: Bearer ' . $token['access_token'];

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                $response = curl_exec($ch);
                
                $user = json_decode($response, true);

                echo "<pre>";
                var_dump($user);
                echo "</pre>";
        }
}
