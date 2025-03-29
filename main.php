<?php
    require_once('./classes/Human.php');
    require_once('./classes/Enemy.php');

// =====================================================

    $kamoshida = new Human();
    $goblin = new Enemy();

// =====================================================

    $kamoshida -> name = "カモシダ";
    $goblin -> name = "ゴブリン";

// =====================================================

    echo "{$kamoshida -> name} \n";
    echo "{$goblin -> name} \n";
?>