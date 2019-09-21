<?php


class Satoshi
{
    //智が持つポケモンの配列
    public $box = [];

    
    
    //あるポケモンに攻撃してもらうメソッド

//ポケモンをゲットするメソッド
    public function getPokemon($newPokemon)
    {
        //智が持つboxに新しくぽけもんを追加する
        $this->box[] = $newPokemon;
    }
//もっているポケモンの在庫を確認する方法
    public function showPokemons()
    {
        echo 'ポケモン一覧';
        echo '<br>';
        echo '<br>';
        foreach($this->box as $pokemon){
            echo $pokemon->name;
            echo ':  ';
            $pokemon->cry();
            echo '<br>';
        }


        echo '-------------------------------------------------------------------';
    }

//箱に入っているポケモンの番号をもらって、攻撃を実行
    public function orderAttack($num)
    {
       $pokemon = $this->box[$num];

    //    var_dump($pokemon);

        $pokemon->attack();
    }

    
   
//持っているポケモン全員で攻撃
//メソッド名: superAttack
public function superAttack()
{
    foreach($this->box as $pokemon){
        echo $pokemon->attack();
    }
}


}