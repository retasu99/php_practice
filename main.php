<?php

    //===========================================================================ファイルのロード
    require_once('./classes/Human.php');
    require_once('./classes/Enemy.php');
    require_once('./classes/Brave.php');
    //===========================================================================ここまで ファイルのロード

    //===========================================================================インスタンス化
    $kamoshida = new Brave("カモシダ", 100, 30);
    $freeza = new Enemy("フリーザ", 50, 10);
    //===========================================================================ここまで インスタンス化

    //===========================================================================その他の値を設定
    $turn = 1;
    //===========================================================================ここまで その他の値を設定

    //===========================================================================戦闘
    echo "==========戦闘開始========== \n";

    while ($kamoshida->getHitPoint() > 0 && $freeza->getHitPoint() > 0) {

        echo "--------------------". $turn ."ターン目 \n";

        //現在のHPの表示
        echo $kamoshida->getName() ." HP ". $kamoshida->getHitPoint() ."/". $kamoshida::MAX_HITPOINT ."\n";
        echo $freeza->getName() ." HP ". $freeza->getHitPoint() ."/". $freeza::MAX_HITPOINT ."\n";
        //ここまで 現在のHPの表示
        echo "\n";

        //お互いの攻撃
        $kamoshida->doAttack($freeza); //カモシダの攻撃
        echo "\n";
        $freeza->doAttack($kamoshida); //フリーザの攻撃
        //ここまで お互いの攻撃
        echo "\n";

        $turn++;
    }
    //=============================================================================ここまで 戦闘

    echo "==========戦闘終了========== \n";

    //現在のHPの表示
    echo $kamoshida->getName() ." HP ". $kamoshida->getHitPoint() ."/". $kamoshida::MAX_HITPOINT ."\n";
    echo $freeza->getName() ." HP ". $freeza->getHitPoint() ."/". $freeza::MAX_HITPOINT ."\n";
    //ここまで 現在のHPの表示
    echo "\n";


?>