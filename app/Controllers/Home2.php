<?php

namespace App\Controllers;

class Home2 extends BaseController
{

    public function helloWorld():void
    {
        echo 'Hello World';
    }

    public function caVa():void
    {
        echo 'ca va';
    }

    public function salut(string $nom):void
    {
        echo 'salut '.$nom;
    }

    public function identite(string $nom,string $prenom,int $age):void
    {
        echo 'Je m appelle '.$nom.' '.$prenom.' et j ai '.$age.' ans';
    }

    public function helloWorld2():string
    {
        return view('Home2/helloWorld2');
    }

    public function helloWorld3():string
    {
        $data = [
            "title"=>"Titre hello World"
        ];
        return view('Home2/helloWorld3',$data);
    }
}