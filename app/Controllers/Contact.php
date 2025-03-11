<?php

namespace App\Controllers;

class Contact extends BaseController
{
    private $email;

    public function __construct()
    {
        $this->email = service('email');
    }

    public function sendEmail():string
    {
        $this->email->setFrom('alex@gmail.com','Alexis');
        $this->email->setTo('webmaster@monsite.com');
        $this->email->setSubject('Mon sujet de message');
        $this->email->setMessage('<p> Mon message de bienvenue</p>');
        $img = base_url('public/images/bandol.jpg');
        $this->email->attach($img);
        if($this->email->send())
        {
            return view('success');
        }
        else
        {
            return view('fail');
        }
    }
}