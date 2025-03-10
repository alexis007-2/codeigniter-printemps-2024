<?=$this->extend('layout')?>
<?=$this->section('custombody')?>
<?php
$icon = $temps->weather[0]->icon;
?>
<h1> Meteo de <?=$temps->name?></h1>
<p> Il fait <?=$temps->weather[0]->description?></p>
<p><img src="https://openweathermap.org/img/wn/<?=$icon?>@4x.png"
<?=$this->endSection()?>