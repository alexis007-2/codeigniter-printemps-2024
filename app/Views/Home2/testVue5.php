<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
<?=$title?>
<?=$this->endSection()?>
<?=$this->section('customcss')?>
<link rel="stylesheet" href="<?=base_url('public/assets/css/style2.css')?>"/>
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<h2> Quelques images</h2>
<img src="<?=base_url('public/images/littoral-grau-du-roi.jpg')?>"/><br/>
<img src="<?=base_url('public/images/phare-grau-du-roi.jpg')?>"/><br/>
<img src="<?=base_url('public/images/toulouse.jpg')?>"/><br/>
<img src="<?=base_url('public/images/narbonne.jpg')?>"/><br/>
<?=$this->endSection()?>
<?=$this->section('customjs')?>
<script src="<?=base_url('public/assets/js/script2.js')?>"></script>
<?=$this->endSection()?>
