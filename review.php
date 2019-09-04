<?php

//関数名;　echoHello
//処理　画面に"Hello"と出力する

function echoHello (){
    echo ('Hello');
}

echoHello();



//関数名echoUserName
//  引数：名前
//　処理：「私はooです」を出力する

function echoUserName($name){

    echo "私の名前は".$name."です。";
}

echoUserName('感');

//クラス：Human
//プロパティ：name
//メソッド：echoUserName
//　->「私はooです」を出力する

?>
