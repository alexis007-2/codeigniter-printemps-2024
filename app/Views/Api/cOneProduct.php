<?=$this->extend('layout')?>
<?=$this->section('custombody')?>
<h1> <?=$product->name?></h1>
<p><?=$product->description?></p>
<p> Prix :<?=$product->price?></p>
<?=$this->endSection()?>