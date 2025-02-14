<?php

namespace App\Controllers;

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
}