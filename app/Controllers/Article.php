<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;
class Article extends BaseController
{
    private $model;

    public function __construct()
    {
      $this->model = model('ArticleModel');
      helper('form');  
    }

    public function cListAllArticle():string
    {
        $articles = $this->model->listAllArticle();
        $data = [
            "articles"=>$articles
        ];
        return view('Article/cListAllArticle',$data);
    }

    public function cListOneArticle(int $idarticle):string
    {
        $article = $this->model->listOneArticle($idarticle);
        $data = [
            "article"=>$article
        ];
        return view('Article/cListOneArticle',$data);
    }

    public function cOneArticleCommentaire(int $idarticle):string
    {
       $article = $this->model->listOneArticle($idarticle);
       $commentaire = $this->model->oneArticleCommentaire($idarticle);
        $data = [
            "article"=>$article,
            "commentaire"=>$commentaire
        ];
        return view('Article/cOneArticleCommentaire',$data);
    }

    public function cAddArticleForm():string
    {
        if($this->request->is('post')==false)
        {
            return view('Article/cAddArticleForm');
        }
        else
        {
            $rule = [
                "titre"=>[
                    "label"=>"Le titre",
                    "rules"=>"min_length[2]|max_length[60]|required",
                    "errors"=>[
                        "min_length"=>"titre trop court",
                        "max_length"=>"titre trop long",
                        "required"=>"titre obligatoire" 
                    ]
                    ],
                    "contenu"=>[
                    "label"=>"contenu",
                    "rules"=>"required",
                    "errors"=>[    
                        "required"=>"contenu obligatoire" 
                    ]
                    ],
                    "image"=>[
                    "label"=>"image article",
                    "rules"=>"valid_url|required",
                    "errors"=>[
                        "valid_url"=>"url non valide",
                       "required"=>"titre obligatoire" 
                    ]
                    ]

                    ];
            if($this->validate($rule)==false)
            {
                return view('Article/addArticleForm');
            }
            else
            {
                $titre = $this->request->getPostGet('titre');
                $contenu = $this->request->getPostGet('contenu');
                $image = $this->request->getPostGet('image');
                $dateDeCreation = Time::now('Europe/Paris','fr_FR');
                $utilisateurId = 1;
                $data = [
                    "titre"=>$titre,
                    "contenu"=>$contenu,
                    "date_de_creation"=>$dateDeCreation,
                    "image"=>$image,
                    "utilisateur_id"=>$utilisateurId
                ];
                if($this->model->addArticle($data))
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