<?php

require_once('Pokemon.php');


//ポケモンクラスを継承したピカツーを作成

class Pikachu extends Pokemon 
{
    //オーバーライdo
    public function cry()
    {
        echo 'ぴっかツー';
        echo '<br>';
    }
}