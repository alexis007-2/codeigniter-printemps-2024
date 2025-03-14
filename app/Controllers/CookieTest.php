<?php
namespace App\Controllers;

class CookieTest extends BaseController
{
    public function __construct()
    {
        helper('cookie');
    }

    public function createCookie()
    {
        $data = [
            "pseudo"=>"alexis",
            "email"=>"alexis@outlook.fr"
        ];
        $cookie = [
            "name"=>"profil",
            "value"=>json_encode($data),
            "expire"=>600,
            "secure"=>false,
            "httponly"=>false
        ];

        set_cookie($cookie);
        echo 'cookie crée';
    }

    public function readCookie()
    {
        $cookie_value = get_cookie('profil');
        if(get_cookie('profil'))
        {
            $data = json_decode($cookie_value);
            echo 'pseudo :'.$data->pseudo;
            echo '<br>';
            echo 'email : '.$data->email;
        }
    }
}