<?php

require_once('class.php');

$shunya1 = new Shunya(100, 15, 18, 50, 10);

echo 'しゅんやのHPは';
echo $shunya1->hp;
echo '<br>';
echo 'しゅんやのMPは';
echo $shunya1->mp;
echo '<br>';
echo 'しゅんやの攻撃力は';
echo $shunya1->attack;
echo '<br>';
echo 'しゅんやの素早さは';
echo $shunya1->speed;
echo '<br>';
echo 'しゅんやの防御力は';
echo $shunya1->defence;
echo '<br>';

$shunya1->ipad();
echo '<br>';
$shunya1->slack();
echo '<br>';
