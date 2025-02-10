<?php
namespace App\Controllers;

class Tag extends BaseController
{
    private $model ;

    public function __construct()
    {
        helper('form');
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

    public function cListOneTag(int $idtag):string
    {
        $tag = $this->model->listOneTag($idtag);
        $data = [
            "title"=>"Mon tag",
            "tag"=>$tag
        ];
        return view('Tag/cListOneTag',$data);
    }

    public function cListAllTagDesc():string
    {
        $tags = $this->model->listAllTagDesc();
        $data = [
            "title"=>"Tag par ordre decroissant",
            "tags"=>$tags
        ];
        return view('Tag/cListAllTagDesc',$data);
    }

    public function cCountTag():void
    {
        $c = $this->model->countTag();
        echo $c;
    }

    public function cLimitTag(int $limit):string
    {
        $tags = $this->model->limitTag($limit);
        $data = [
            "tags"=>$tags
        ];
        return view('Tag/cLimitTag',$data);
    }

    public function cAddTag():string
    {
        $data = 
        [
            "nom_tag"=>"Budget"
        ];
        if($this->model->addTag($data))
        {
            return view('success');
        }
        else
        {
           return view('fail'); 
        }
    }

    public function cUpdateTag(int $idtag):string
    {
        $data = [
            "nom_tag"=>"Budget 2025"
        ];
        if($this->model->updateTag($idtag,$data))
        {
            return view('success');
        }
        else
        {
            return view('fail');
        }

    }

    public function cDeleteTag(int $idtag):string
    {
        if($this->model->deleteTag($idtag))
        {
            return view('success');
        }
        else
        {
            return view('fail');
        }
    }

    public function cAddTagForm():string
    {
        // Si on n' a rien envoyer dans le formulaire
        if($this->request->is('post')==false)
        {
            //Affichage par defaut du formulaire
            return view('Tag/cAddTagForm');
        }
        else
        {
            // Le formulaire a été envoyé et on va passer au regle de validation
            $rule = [
                "nom_tag"=>[
                    "label"=>"nom du tag",
                    "rules"=>"min_length[2]|max_length[20]|alpha_numeric|required",
                    "errors"=>[
                        "min_length"=>"Tag trop court",
                        "max_length"=>"Tag trop long",
                        "alpha_numeric"=>"Doit contenir des lettres et des chiffres",
                        "required"=>"Tag obligatoire"
                    ]
                ]

            ];
            
            if($this->validate($rule)==false)
                //La validation a echoué et ca retourne la vue avec les erreurs trouvées
                return view('Tag/cAddTagForm');
            else
            {
                // Equivalent à $_POST['nom_tag]
                $nomTag = $this->request->getPostGet('nom_tag');
                $data = [
                    "nom_tag"=>$nomTag
                ];
                if($this->model->addTag($data))
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
}