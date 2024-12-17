<?php

namespace App\Controllers;

class Maison extends BaseController
{
    public function acheter():void
    {
        echo 'j\'achete';
    }

    public function vendre():void
    {
        echo 'Je vends';
    }

    public function vendre2(string $prenom,float $montant):void
    {
        echo 'j\'ai vendu à '.$prenom.' ma maison pour la modique somme de '.$montant.'€';
    }
}