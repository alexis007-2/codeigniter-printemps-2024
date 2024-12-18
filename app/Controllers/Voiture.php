<?php

namespace App\Controllers;

class Voiture extends BaseController
{
    public function demarrer():void
    {
        echo 'je demarre';
    }

    public function freiner():void
    {
        echo 'je freine';
    }

    public function maVoiture(string $model,int $km):void
    {
        echo 'Ma voiture est une '.$model.' et elle a '.$km.' km';
    }

    public function maVoiture2(string $model,int $km):string
    {
        $data = [
            "model"=>$model,
            "km"=>$km,
            "options"=>['climatisation','ABS','Apple auto','Regulateur de vitesse','Caméra de recul']
        ];
        return view('Voiture/maVoiture2',$data);
    }
}