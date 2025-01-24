<?php

namespace App\Models;

use CodeIgniter\Model;

class TagModel extends Model
{
    protected $table = "tag"; // Nom de la table
    protected $primaryKey = 'idtag'; // Nom du champ de la clé primaire
    protected $useAutoIncrement = true; //Utilisation de l' auto incremente
    protected $allowedFields = ['nom_tag']; // Champs qu' on va utiliser et modifier


    /**
     * Retourne tous les tags dans la table tag en BDD
     *
     * @return array
     */
    public function listAllTag(): array
    {
        // Equivalent à SELECT * FROM tag
        return $this->get()->getResult();
    }

    /**
     * retourne un tag dans la table tag
     *
     * @param integer $idtag 
     * @return object
     */
    public function listOneTag(int $idtag): object
    {
        // Equivalent à SELECT * FROM tag WHERE idtag = $idtag
        return $this->where('idtag', $idtag)->get()->getRow();
    }

    public function listAllTagDesc():array
    {

        return $this->orderBy('nom_tag','DESC')->get()->getResult();
    }

    public function countTag():int
    {
        return $this->countAll();
    }
}
