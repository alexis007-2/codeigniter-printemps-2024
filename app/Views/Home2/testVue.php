<?=$this->extend('layout')?>
<?=$this->section('metadescription')?>
<meta name="description" content="Ma super description">
<?=$this->endSection()?>
<?=$this->section('customcss')?>
<style>
   body{
    background-color: magenta;
   }
</style>
<?=$this->endSection()?>
<?=$this->section('customtitle')?>
Test vue
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<p> Un test</p>
<button type="button" class="btn btn-primary">Primary</button>
<?=$this->endSection()?>