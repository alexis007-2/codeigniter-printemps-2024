<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
Ajout de categorie
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<h1> Ajout de catégorie</h1>
<?=form_open('add-categorie-form')?>
<label for="nom_categorie">Catégorie :</label>
<input type="text" class="form-control" name="nom_categorie" id="nom_categorie" value="<?=set_value('nom_categorie')?>"/><br/>
<?=validation_show_error('nom_categorie')?>
<button type="submit" class="btn btn-primary">Envoyer</button>
<?=form_close()?>
<?=$this->endSection()?>