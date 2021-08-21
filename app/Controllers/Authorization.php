<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class Authorization extends Controller
{
	public function index()
        {
                if (isset($_GET['url'])){
                        session()->set([ 'return_point_url' => $_GET['url']]);
                }

                var_dump(session()->get());
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
                        'scope' => 'identify email'
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

        private function authorization($user)
        {
                echo "<pre>";
                var_dump($user);
                echo "</pre>";

                echo "<img src='".$user['avatar']."' />";

                $model = new UserModel();
                $db_user = $model->get_social_user($user['social_id']);

                $user['update_date'] = new Time('now');

                if (!is_null($db_user))
                {
                        //update
                        $model->update($db_user, $user);

                        echo "UPDATE";
                }else
                {
                        //insert
                        $user['reg_date'] = $user['update_date'];
                        $model->insert($user);
                        echo "insert";
                }

                session()->set($user);
                
                if (session()->has('return_point_url'))
                        $return_point_url = session()->get('return_point_url');
                else
                        $return_point_url = 'https://google.com';
                
                var_dump($return_point_url);

                return redirect()->to($return_point_url);
        }

        public function exit(){
                if (session()->has('return_point_url'))
                        $return_point_url = session()->get('return_point_url');
                else
                        $return_point_url = 'https://google.com';
                session()->destroy();
                return redirect()->to($return_point_url);
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

                $user = [
                        'social_network'  => 'facebook',
                        'social_id'  => $data['id'],
                        'name'  => $data['name'],
                        'email'  => $data['email'],
                        'avatar'  => $data['avatar'],
                ];

                $this->authorization($user);
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
                
                $data = json_decode($response, true);

                echo "<pre>";
                var_dump($data);
                echo "</pre>";

                $data['avatar'] = 'https://cdn.discordapp.com/avatars/'.$data['id'].'/'.$data['avatar'];


                $user = [
                        'social_network'  => 'discord',
                        'social_id'  => $data['id'],
                        'name'  => $data['username'],
                        'email'  => $data['email'],
                        'avatar'  => $data['avatar'],
                ];

                $this->authorization($user);

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
                
                $data = json_decode($response, true);
                
                $data = $data['data'][0];
                echo "<pre>";
                var_dump($data);
                echo "</pre>";

                $user = [
                        'social_network'  => 'twitch',
                        'social_id'  => $data['id'],
                        'name'  => $data['display_name'],
                        'email'  => $data['email'],
                        'avatar'  => $data['profile_image_url'],
                ];

                $this->authorization($user);
        }

        public function github()
        {
                if (!empty($_GET['code'])) {
                        $config = config('SocialNetwork');
                        $config_data = $config->get_data("github");
                        $params = array(
                                'client_id'     => $config_data['id'],
                                'client_secret' => $config_data['secret'],
                                'redirect_uri'  => $config_data['url'],
                                'code'          => $_GET['code']
                        );	
                                        
                        $ch = curl_init('https://github.com/login/oauth/access_token');
                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, urldecode(http_build_query($params))); 
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt($ch, CURLOPT_HEADER, false);
                        $data = curl_exec($ch);
                        curl_close($ch);	
                        parse_str($data, $data);
                 
                        if (!empty($data['access_token'])) {
                                $ch = curl_init('https://api.github.com/user');
                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: token ' . $data['access_token']));
                                curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88');
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                $info = curl_exec($ch);
                                curl_close($ch);
                                $info = json_decode($info, true);
                 
                                if (!empty($info['id'])) {
                                        echo "<pre>";
                                        var_dump($info);
                                        echo "</pre>";

                                        $user = [
                                                'social_network'  => 'github',
                                                'social_id'  => $info['id'],
                                                'name'  => $info['name'],
                                                'email'  => $info['email'],
                                                'avatar'  => $info['avatar_url'],
                                        ];

                                        $this->authorization($user);
                                }
                        } 
                }
        }
}
