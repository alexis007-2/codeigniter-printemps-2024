<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
Liste des utilisateurs
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<table class="table table-striped">
    <tr>
        <td>id</id>
        <td>Pseudo</td>
        <td>Email</td>
        <td>Date d'inscription</td>
        <td>Role</td>
    </tr>
<?php foreach($users as $u):?>
    <tr>
        <td><?=$u->idutilisateur?></td>
        <td><?=$u->pseudo?></td>
        <td><?=$u->email?></td>
        <td><?=$u->date_inscription?></td>
        <td><?=$u->role?></td>
    </tr>
<?php endforeach?>
</table>
<?=$this->endSection()?>