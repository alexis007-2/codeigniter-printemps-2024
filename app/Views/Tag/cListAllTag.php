<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
<?=$title?>
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<?php foreach ($tags as $t):?>
<p><?=$t->nom_tag?></p>
<?php endforeach?>
<?=$this->endSection()?>