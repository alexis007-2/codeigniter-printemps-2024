<?php
namespace App\Controllers;
use CodeIgniter\I18n\Time;

class User extends BaseController
{
    private $model;

    public function __construct()
    {
        helper('form');
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

    public function cAddUserForm():string
    {
        if($this->request->is('post')==false)
        {
            return view('User/cAddUserForm');
        }
        else
        {
            $rule = [
                "pseudo"=>[
                    "label"=>"pseudo",
                    "rules"=>"min_length[2]|max_length[50]|required",
                    "errors"=>[
                        "min_length"=>"pseudo trop court",
                        "max_length"=>"pseudo trop long",
                        "required"=>"pseudo obligatoire"
                ]
                    ],
                "email"=>[
                    "label"=>"email",
                    "rules"=>"min_length[2]|max_length[100]|valid_emails|required",
                    "errors"=>[
                        "min_length"=>"Email trop court",
                        "max_length"=>"Email trop long",
                        "valid_emails"=>"Email non valide",
                        "required"=>"Email obligatoire"
                ]    
                    ],
                "mot_de_passe"=>[
                    "label"=>"Mot de passe",
                    "rules"=>"min_length[2]|max_length[30]|required",
                    "errors"=>[
                        "min_length"=>"Mot de passe trop court",
                        "max_length"=>"Mot de passe trop long",
                        "required"=>"Mot de passe obligatoire"
                ]    
                    ]
                    ];
                    if($this->validate($rule)==false)
                    {
                        return view('User/cAddUserForm');
                    }
                    else
                    {
                        $pseudo = $this->request->getPostGet('pseudo');
                        $email = $this->request->getPostGet('email');
                        $motDePasse =password_hash($this->request->getPostGet('mot_de_passe'),PASSWORD_DEFAULT);
                        $data = [
                            "pseudo"=>$pseudo,
                            "email"=>$email,
                            "mot_de_passe"=>$motDePasse,
                            "date_inscription"=>Time::now('Europe/Paris','fr_FR'),
                            "role"=>4
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
        }
    }
}