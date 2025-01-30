<?php

namespace App\Models;

use CodeIgniter\Model;

class CategorieModel extends Model
{
    protected $table = 'categorie';
    protected $primaryKey = 'idcategorie';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nom_categorie'];

    /**
     * Retourne toutes les catégories dans la table catagorie en BDD
     *
     * @return array
     */
    public function listAllCategorie(): array
    {
        // Equivalent à SELECT * FROM categorie
        return $this->get()->getResult();
    }

    public function addCategorie(array $data): bool
    {
        return $this->insert($data);
    }

    public function updateCategorie(array $data, int $idCategorie): bool
    {
        return $this->update($idCategorie, $data);
    }

    public function deleteCategorie(int $idCategorie): bool
    {
        return $this->delete($idCategorie);
    }
}
