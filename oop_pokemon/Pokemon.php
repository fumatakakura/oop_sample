<?php


class Pokemon
{
    public $hp;
    public $pp;
    public $name;

    //コンストラクタ
    public function __construct($hp, $pp, $name)
    {
        $this->hp = $hp;
        $this->pp = $pp;
        $this->name = $name;
    }


    public function cry()
    {
        echo 'うウェーーーい';
        echo '<br>';
    }

    public function attack()
    {
       $this->noAttack();
    }

    private function noAttack()
    {
        echo '技を覚えてません';
        echo '<br>';
    }
}