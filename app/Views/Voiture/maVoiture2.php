<p> Ma voiture est une <?=$model?> et elle a <?=$km?> km
<p> Ses options sont :
<ul>
<?php foreach ($options as $o):?>
    <li><?=$o?></li>
<?php endforeach?>
</ul>