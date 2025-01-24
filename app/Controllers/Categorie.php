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
}