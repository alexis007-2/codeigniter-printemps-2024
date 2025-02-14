<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'idarticle';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['titre','contenu','date_de_creation','date_de_modification','image','utilisateur_id'];

    public function listAllArticle():array
    {
        return $this->get()->getResult();
    }

    public function listOneArticle(int $idarticle):object
    {
        return $this->where('idarticle',$idarticle)->get()->getRow();
    }

    public function oneArticleCommentaire(int $idarticle):array
    {
        return $this->select('commentaire.pseudo_commentaire,commentaire.contenu_commentaire,commentaire.date_commentaire,article.titre,article.contenu,article.image,article.date_de_creation')->join('commentaire','commentaire.article_id = article.idarticle')->where('idarticle',$idarticle)->get()->getResult();
    }

    public function addArticle(array $data):bool
    {
        return $this->insert($data);
    }
}