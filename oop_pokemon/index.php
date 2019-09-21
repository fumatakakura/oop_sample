<?php
require_once('Pikachu.php');
require_once('Dengue.php');
require_once('Satoshi.php');

$pikachu = new Pikachu(100, 50, 'ピカツー');
$pikachu->cry(); 

echo 'ピカツーのHPは';
echo $pikachu->hp;
echo '<br>';
echo 'ピカツーの名前は';
echo $pikachu->name;
echo '<br>';
$pikachu->attack();

$dengue = new Dengue(100, 30, '殿軍');
$dengue->cry();
echo '殿軍の名前は';
echo $dengue->name;
echo 'デンぐーのHPは';
echo $dengue->hp;
echo '<br>';


$satoshi = new Satoshi();

//智がピカツーを捕まえた！
$satoshi-> getPokemon($pikachu);

$satoshi-> getPokemon($dengue);


var_dump($satoshi->box);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$satoshi-> showPokemons();

//ポケモンに攻撃させる
$satoshi->orderAttack(0);

$satoshi->superAttack();

