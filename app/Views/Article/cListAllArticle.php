<?php use CodeIgniter\I18n\Time;?>
<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
Liste de tous les articles
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<h1> Liste de tous les articles</h1>
<?php foreach($articles as $a):?>
<h2><?=$a->titre?></h2>
<p><em> posté le <?=Time::parse($a->date_de_creation,'Europe/Paris')->toLocalizedString('EEEE dd MMMM yyyy à hh:mm')?></em></p>
<img src="<?=$a->image?>"/>
<?=$a->contenu?>
<?php endforeach?>
<?=$this->endSection()?>
