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
}