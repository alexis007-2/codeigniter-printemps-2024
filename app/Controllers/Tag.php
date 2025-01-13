<?php
namespace App\Controllers;

class Tag extends BaseController
{
    private $model ;

    public function __construct()
    {
        $this->model = model('TagModel');
    }


    /**
     * Retourne la liste des tags
     *
     * @return string
     */
    public function cListAllTag():string
    {
        //Appel de la fonction du modele Tag
        $tags = $this->model->listAllTag();
        $data = [
            "title"=>"Liste des tags",
            "tags"=>$tags,
        ];
        return view('Tag/cListAllTag',$data);

    }
}