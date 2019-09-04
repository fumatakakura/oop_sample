<?php

class Shunya
{
    public $hp;
    public $mp;
    public $attack;
    public $speed;
    public $defence;

    public function __construct($hp, $mp, $attack, $speed, $defence){
        echo '新しいしゅんやの誕生日';
        echo '<br>';


        $this->hp = $hp;
        $this->mp = $mp;
        $this->attack = $attack;
        $this->speed = $speed;
        $this->defence = $defence;
    }

    function ipad()
    {
        echo ('iPadでお絵かきを始めた！');
        echo'<br>';
    }

    function slack()
    {
        echo('slackでくだらんことを送っている。。。');
    }

}