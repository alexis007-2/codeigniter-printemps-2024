<?php
namespace App\Controllers;

class SessionTest extends BaseController
{
    private $session;

    public function __construct()
    {
        $this->session = service('session');
    }

    public function createSession():void
    {
        $data = [
            "pseudo"=>"alex",
            "email"=>"alex@gmail.com"
        ];
        $this->session->set($data);
        echo 'Session crée';
    }

    public function readSession():void

    {
        if($this->session->has('pseudo'))
        {
            echo 'pseudo :'.$this->session->get('pseudo');
            echo '<br>';
            echo 'email : '.$this->session->get('email');
        }
    }
}