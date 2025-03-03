<?=$this->extend('layout')?>
<?=$this->section('custombody')?>
<h1> Upload image</h1>
<?=form_open_multipart('upload-image')?>
<label for="image"> Upload image</label>
<input type="file" name="image" id="image"/><br/>
<?=validation_show_error('image')?>
<input type="submit" value="envoyer"/>
<?=form_close()?>
<?=$this->endSection()?>