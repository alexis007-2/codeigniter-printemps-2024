<?php use CodeIgniter\I18n\Time;?>
<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
<?=$article->titre?>
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<h1><?=$article->titre?></h1>
<p><em>Posté le <?=Time::parse($article->date_de_creation,'Europe/Paris')->toLocalizedString('EEEE dd MMMM à HH:mm')?></em></p>
<img src="<?=$article->image?>"/>
<?=$article->contenu?>
<?=$this->endSection()?>