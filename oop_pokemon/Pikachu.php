<?php

require_once('Pokemon.php');


//ポケモンクラスを継承したピカツーを作成

class Pikachu extends Pokemon 
{
    //オーバーライdo
    //親クラスが持つメソッドの上書き
    public function cry()
    {
        echo 'ぴっかツー';
        echo '<br>';
    }

    public function attack()
    {
        $this->thunderVolt();
    }

    private function thunderVolt()
    {
        echo 'サンダーボルト発動';
        echo 'ビリビリ';
        echo '<br>';
    }
}