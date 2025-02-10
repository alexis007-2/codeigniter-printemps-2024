<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'idutilisateur';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['pseudo','email','mot_de_passe','date_inscription','role'];

    public function listAllUser()
    {
        //Equivalent à SELECT idutilisateur,pseudo,email,date_inscription,role FROM utilisateur
        return $this->select('idutilisateur,pseudo,email,date_inscription,role')->get()->getResult();
    }

    public function listOneUser(int $idutilisateur):object
    {
        return $this->select('idutilisateur,pseudo,email,date_inscription,role')->where('idutilisateur',$idutilisateur)->get()->getRow();
    }

    public function deleteUser(int $idutilisateur):bool
    {
        return $this->delete($idutilisateur);
    }

    public function addUser(array $data):bool
    {
        return $this->insert($data);
    }

    public function updateUser(int $idutilisateur,array $data):bool
    {
        return $this->update($idutilisateur,$data);
    }
}