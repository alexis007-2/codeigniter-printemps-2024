<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
Ajout d'article
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<h1> Ajout d'article</h1>
<?=form_open('add-article-form')?>
<label for="titre">Titre</label>
<input type="text" name="titre" id="titre" class="form-control" value="<?=set_value('titre')?>"/><br/>
<?=validation_show_error('titre')?>
<label for="contenu">Contenu</label>
<textarea class="form-control" id="contenu" name="contenu"></textarea><br/>
<?=validation_show_error('contenu')?>
<label for="image">Image</label>
<input type="url" class="form-control" id="image" name="image" value="<?=set_value('image')?>"/>
<?=validation_show_error('image')?>
<button type="submit" class="btn btn-primary">Envoyer</button>
<?=form_close()?>
<?=$this->endSection()?>
