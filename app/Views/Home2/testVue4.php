<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
<?=$title?>
<?=$this->endSection()?>
<?=$this->section('customcss')?>
<link rel="stylesheet" href="<?=base_url('public/assets/css/style.css')?>"/>
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<h2> Quelques images</h2>
<img src="<?=base_url('public/images/bandol.jpg')?>"/><br/>
<img src="<?=base_url('public/images/hyeres.jpg')?>"/><br/>
<?=$this->endSection()?>
<?=$this->section('customjs')?>
<script src="<?=base_url('public/assets/js/script.js')?>"></script>
<?=$this->endSection()?>