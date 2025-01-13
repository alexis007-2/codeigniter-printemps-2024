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

    public function helloWorld4():string
    {
        $data = [
            "title"=> "Mon super titre",
            "paragraphe"=>"coucou salut"
        ];
        return view('Home2/helloWorld4',$data);
    }

    public function identite2(string $nom,string $prenom,int $age):string
    {
        $data = [
            "nom"=>$nom,
            "prenom"=>$prenom,
            "age"=>$age
        ];
        return view('Home2/identite2',$data);
    }

    public function listResto():string
    {
        $data = [
            "title"=>"Liste des restaurants",
            "resto"=>['Burger King','Hipopotamus','Bistro Régent','Flunch']
        ];
        return view('Home2/listResto',$data);
    }

    public function listTele():string
    {
        $data = [
            "title"=>"Les télévisions",
            "tele"=>['LG','Haier','JVC','TCL','Sony']
        ];
        return view('Home2/listTele',$data);
    }

    public function testVue():string
    {
        $data = [
            "title"=>"test vue html",
            "body"=>"Ceci est un test de vue bootstrap"
        ];
        return view('Home2/testVue',$data);
    }

    public function testVue2(string $nom,string $prenom):string
    {
        $data = [
            "title"=>"test vue2",
            "nom"=>$nom,
            "prenom"=>$prenom
        ];
        return view('Home2/testVue2',$data);
    }

    public function testVue3():string
    {
        $data = [
            "title"=>"test vue 3"
        ];
        return view ('Home2/testVue3',$data);
    }

    public function testVue4():string
    {
        $data = [
            "title"=>"test vue 4"  
        ];
        return view('Home2/testVue4',$data);
    }

    public function testVue5():string
    {
        $data = [
            "title"=>"test vue 5"  
        ];
        return view('Home2/testVue5',$data);
    }
