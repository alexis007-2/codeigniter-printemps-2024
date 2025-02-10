<?=$this->extend('layout')?>
<?=$this->section('customtitle')?>
Un utilisateur
<?=$this->endSection()?>
<?=$this->section('custombody')?>
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?=$user->pseudo?></li>
    <li class="list-group-item"><?=$user->email?></li>
    <li class="list-group-item"><?=$user->date_inscription?></li>
    <li class="list-group-item"><?=$user->role?></li>
  </ul>
</div>
<?=$this->endSection()?>