<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
Ajout de tag
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<h1> Ajout de tag</h1>
<?=form_open('add-tag-form')?>
<label for="nom_tag">Nom du tag</label>
<input type="text" class="form-control" name="nom_tag" id="nom_tag" value="<?=set_value('nom_tag')?>"/><br/>
<?=validation_show_error('nom_tag')?>
<button type="submit" class="btn btn-primary">Envoyer</button>
<?=form_close()?>
<?=$this->endSection()?>
