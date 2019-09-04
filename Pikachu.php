<?php



//クラス(設計図)の構文

class Pikachu 
{

    //属性：プロパティともいう

    // - HP
    public $hp;

    // - MP
    public $mp;

//コンストラクタ
//インスタンス化したときに呼ばれる
// new Pikachu()　をしたときに呼ばれる

public function __construct($hp, $mp){
    echo'ピカツーが生まれた';
    echo '<br>';

    //$this: インスタンスのことを指している
    //今回の場合は生まれtらピカツー

    $this->hp = $hp;
    $this->mp = $mp;
}








    //振る舞い：メソッドともいう(関数)

    //サンダーボルト
    function thunderVolt()
    {
        echo ('サンダーボルトを発動した');
        echo '<br>';
    }

    //アイアンテール
    function ironTail()
    {  
        echo ('アイアンテールを発動した');
        echo '<br>';
    }
 

}