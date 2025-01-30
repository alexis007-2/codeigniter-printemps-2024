<?=$this->extend('layout')?>
<?=$this->section('custombody')?>
<?php foreach ($tags as $t):?>
<p><?=$t->nom_tag?></p>
<?php endforeach?>
<?=$this->endSection()?>