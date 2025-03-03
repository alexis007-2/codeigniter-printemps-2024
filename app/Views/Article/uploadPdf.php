<?=$this->extend('layout')?>
<?=$this->section('custombody')?>
<h1> Upload pdf</h1>
<?=form_open_multipart('upload-pdf')?>
<label for="pdf"> Upload de Pdf</label>
<input type="file" name="pdf" id="pdf"/><br/>
<?=validation_show_error('pdf')?>
<input type="submit" value="envoyer"/>
<?=form_close()?>
<?=$this->endSection()?>