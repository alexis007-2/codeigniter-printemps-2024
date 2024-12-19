<?=$this->extend('layout')?>
<?=$this->section('customcss')?>
<style>
    body 
    {
        background-color: yellow;
    }
</style>
<?=$this->endSection();?>
<?=$this->section('title')?>
Test vue 2
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<div class="p-3 mb-2 bg-danger text-white">Joyeuses fêtes <?=$prenom?> <?=$nom?></div>
<?=$this->endSection()?>
<?=$this->section('customjs')?>
<script>
    console.log('coucou');
</script>
<?=$this->endSection()?>
