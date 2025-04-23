<?php

    class Human
    {
        //-------------------------------プロパティ（変数と定数）を定義

        //定数を定義
        const MAX_HITPOINT = 100;

        //変数を定義
        public $name;
        public $hitPoint = 100;
        public $attackPoint = 20;
        //--------------------------------------ここまでプロパティの定義



        //--------------------------------------------攻撃メソッドの定義

        public function doAttack($target)
        {
            // メッセージ----------------------------------------------

            echo $this->name ."の攻撃". "\n";
            echo $enemy->name ."に". $this->attackPoint ."のダメージ". "\n";

            // ここまでメッセージ---------------------------------------

            $enemy->tookDamage($this->attackPoint); //$enemy（インスタンス）のtookDamage（被弾メソッド）を呼び出し実行（引数はHumanクラスで作ったインスタンスのattackPoint）
        }
        //-------------------------------------ここまで攻撃メソッドの定義



        //--------------------------------------------被弾メソッドの定義

        public function tookDamage($damage)
        {
            $this->hitPoint -= $damage;

            if ($this->hitPoint < 0) {
                $this->hitPoint = 0;
            }
        }
        //-------------------------------------ここまで被弾メソッドの定義
    }

?>