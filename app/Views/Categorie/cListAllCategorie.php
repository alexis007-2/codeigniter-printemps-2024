<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
<?=$title?>
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<?php foreach ($categories as $c):?>
<p><?=$c->nom_categorie?></p>
<?php endforeach?>
<?=$this->endSection()?>