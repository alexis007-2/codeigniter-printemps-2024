<?php
namespace App\Controllers;

class Categorie extends BaseController
{
    private $model ;

    public function __construct()
    {
        helper('form');
        $this->model = model('CategorieModel');
    }

    /**
     * Retourne la liste des categories
     *
     * @return string
     */
    public function cListAllCategorie():string
    {
        //Appel de la fonction du modele Categorie
        $categories = $this->model->listAllCategorie();
        $data = [
            "title"=>"Liste des categorie",
            "categories"=>$categories,
        ];
        return view('Categorie/cListAllCategorie',$data);

    }

    public function cAddCategorie():string
    {
        $data = [
            "nom_categorie" =>"Rugby"
        ];
        if($this->model->addCategorie($data))
        {
            return view('success');
        }
        else
        {
            return view('fail');
        }
    }

    public function cUpdateCategorie($idCategorie):string
    {
        $data =[
            "nom_categorie"=>"Basket Ball"
        ];
        if($this->model->updateCategorie($data,$idCategorie))
        {
            return view('success');
        }
        else
        {
            return view('fail');
        }

    }

    public function cDeleteCategorie(int $idCategorie)
    {
        if($this->model->deleteCategorie($idCategorie))
        {
            return view('success');
        }
        else
        {
            return view ('fail');
        }
    }

    public function cAddCategorieForm():string
    {
        if($this->request->is('post')==false)
        {
            return view('Categorie/cAddCategorieForm');
        }

        $rule = [
            "nom_categorie"=>[
                "label"=>"Nom de la catégorie",
                "rules"=>"min_length[2]|max_length[50]|alpha_numeric|required",
                "errors"=>[
                    "min_length"=>"Catégoirie trop courte",
                    "max_length"=>"Catégorie trop longue",
                    "alpha_numeric"=>"Doit contenir lettre et chiffre",
                    "required"=>"Catégorie obligatoire"
                ]
            ]

        ];
        if($this->validate($rule)==false)
        {
            return view('Categorie/cAddCategorieForm');
        }
        else
        {
            $categorie = $this->request->getPostGet('nom_categorie');
            $data = [
                "nom_categorie"=>$categorie
            ];
            if($this->model->addCategorie($data))
            {
                return view('success');
            }
            else
            {
                return view('fail');
            }

        }
    }
}