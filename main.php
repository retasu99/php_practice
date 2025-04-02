<?php
    require_once('./classes/Human.php');
    require_once('./classes/Enemy.php');
    require_once('./classes/Brave.php');

// =====================================================

    // $kamoshida = new Brave();
    // $goblin = new Enemy();

// =====================================================

    $kamoshida = new Brave("カモシダ");
    $goblin = new Enemy("ゴブリン");

    // $kamoshida -> name = "カモシダ";
    // $goblin -> name = "ゴブリン";

    $turn = 1;

// 戦闘開始==============================================

    echo "戦闘開始 \n";

    while ($kamoshida->getHitPoint() > 0 && $goblin->getHitPoint() > 0) {
    // while (($kamoshida -> hitPoint > 0) && ($goblin -> hitPoint > 0)) {

//　各キャラのステータスを表示=====================================================

        echo "～{$turn}ターン目～ \n";

        echo $kamoshida->getName()." : ".$kamoshida->getHitPoint()." / ".$kamoshida::MAX_HITPOINT."\n";
        echo $goblin->getName()." : ".$goblin->getHitPoint()." / ".$goblin::MAX_HITPOINT."\n";

        // echo "{$kamoshida -> name} : {$kamoshida -> hitPoint} / ".$kamoshida::MAX_HITPOINT."\n";
        // echo $goblin -> name." : ".$goblin -> hitPoint." / ".$goblin::MAX_HITPOINT."\n";
        echo "\n";

// 攻撃====================================================

        $kamoshida -> doAttack($goblin);
        echo "\n";
        $goblin -> doAttack($kamoshida);
        echo "\n";

        $turn++;
    };

// 戦闘終了================================================

    echo "戦闘終了 \n";
    echo $kamoshida->getName()." : ".$kamoshida->getHitPoint()." / ".$kamoshida::MAX_HITPOINT."\n";
    echo $goblin->getName()." : ".$goblin->getHitPoint()." / ".$goblin::MAX_HITPOINT."\n";

    // echo "{$kamoshida -> name} : {$kamoshida -> hitPoint} / ".$kamoshida::MAX_HITPOINT."\n";
    // echo $goblin -> name." : ".$goblin -> hitPoint." / ".$goblin::MAX_HITPOINT."\n";
    echo "\n";

?>