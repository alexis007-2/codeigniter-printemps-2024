<?=$this->extend('layout')?>
<?=$this->section('custombody')?>
<h1> Liste des produit</h1>
<table class="table table-striped">
<th>
    <td>id</td>
    <td> Nom du produit</td>
    <td> Description du produit</td>
    <td> Prix </td>
</th>
<?php foreach($products as $p):?>
<tr>
    <td><?=$p->id?></td>
    <td><?=$p->name?></td>
    <td><?=$p->description?></td>
    <td><?=$p->price?>
</tr>
<?php endforeach?>
</table>
<?=$this->endSection()?>