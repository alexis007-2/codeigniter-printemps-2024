<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
Ajout utilisateur
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<h1> Ajout utilisateur</h1>
<?=form_open('add-user-form')?>
<label for="pseudo">Pseudo :</label>
<input type="text" class="form-control" name="pseudo" id="pseudo" value="<?=set_value('pseudo')?>"/><br/>
<?=validation_show_error('pseudo')?>
<label for="email"> Email: </label>
<input type="email" name="email" id="email" class="form-control" value="<?=set_value('email')?>" /><br/>
<?=validation_show_error('email')?>
<label for="mot_de_passe">Mot de passe</label>
<input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe" value="<?=set_value('mot_de_passe')?>"/><br/>
<?=validation_show_error('mot_de_passe')?>
<button type="submit" class="btn btn-primary">Envoyer</button>
<?=form_close()?>
<?=$this->endSection()?>