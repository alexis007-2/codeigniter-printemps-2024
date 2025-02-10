<?php
namespace App\Controllers;
use CodeIgniter\I18n\Time;

class User extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = model('UserModel');
    }

    public function cListAllUser():string
    {
        $users = $this->model->listAllUser();
        $data = [
         "users"=>$users
        ];   
        return view('User/cListAllUser',$data);

    }

    public function cListOneUser(int $idutilisateur):string
    {
        $user = $this->model->listOneUser($idutilisateur);
        $data = [
            "user"=>$user
        ];
        return view('User/cListOneUser',$data);
    }

    public function cAddUser():string
    {
        $data = [
            "pseudo"=>"Bulma",
            "email"=>"bulma@yahoo.fr",
            "mot_de_passe"=>password_hash('azerty',PASSWORD_DEFAULT),
            "date_inscription"=>Time::now('Europe/Paris','fr_FR'),
            "role"=>2
        ];
        if($this->model->addUser($data))
        {
            return view('success');
        }
        else
        {
            return view('echec');
        }
    }

    /**
     * On fait une modification du mail en dur
     *
     * @param integer $idutilisateur
     * @return string
     */
    public function cUpdateUser(int $idutilisateur):string
    {
        $data = [
            "email"=>"bulma@protonmail.com"
        ];
        if($this->model->updateUser($idutilisateur,$data))
        {
            return view('success');
        }
        else
        {
            return view ('echec');
        }
    }
}