<?php
namespace App\Controllers;

class Categorie extends BaseController
{
    private $model ;

    public function __construct()
    {
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
}