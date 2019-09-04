<?php

//ピカツー.phpを読みこむ
require_once('Pikachu.php');


//  ピカツーの設計図を元に、実態を作成
// インスタンス化 (new クラス名())

$pikachu1 = new Pikachu(200, 100);

//クラスを元に作ったピカツーの操作
//プロパティとかメソッドの使い方


//ピカツー１にHP100を設定する
// $pikachu1->hp = 100;


//ピカツー１にMP50を設定する
// $pikachu1->mp = 50;

//画面にピカチュウのhpとmpを表示
echo 'ピカツーのHPは';
echo $pikachu1->hp;
echo '<br>';
echo 'ピカツーのMPは';
echo $pikachu1->mp;
echo '<br>';


//メソッド（振る舞い）の実行
$pikachu1->thunderVolt();
echo '<br>';
$pikachu1->ironTail();
echo '<br>';
$pikachu1->ironTail();
echo '<br>';
$pikachu1->thunderVolt();
echo '<br>';

$pikachu2 = new Pikachu(1145141919072, 710);
// $pikachu2 -> hp = 500;
// $pikachu2 -> mp = 1500;

echo 'ピカツー１のHPは';
echo $pikachu1->hp;
echo '<br>';
echo 'ピカツー2のHPは';
echo $pikachu2->hp;


//ピカツー３の作成
$pikachu3 = new Pikachu(22, 30);

echo 'ピカツー３のhpは';
echo $pikachu3->hp;

