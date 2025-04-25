<?php

    class Human
    {
        //-------------------------------プロパティ（変数と定数）を定義

        //定数を定義
        const MAX_HITPOINT = 100;

        //変数を定義
        private $name;
        private $hitPoint = 100;
        private $attackPoint = 20;
        //--------------------------------------ここまでプロパティの定義



        //--------------------------------------------攻撃メソッドの定義

        public function doAttack($target)
        {
            // メッセージ----------------------------------------------

            echo $this->name ."の攻撃". "\n";
            echo $target->getName() ."に". $this->attackPoint ."のダメージ". "\n";

            // ここまでメッセージ---------------------------------------

            $target->tookDamage($this->attackPoint); //$target（インスタンス）のtookDamage（被弾メソッド）を呼び出し実行（引数はHumanクラスで作ったインスタンスのattackPoint）
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

        //-------------------------------------$nameのゲッターメソッド
        public function getName()
        {
            return $this->name;
        }
        //-------------------------------------ここまで $nameのゲッターメソッド

        //-------------------------------------$nameのコンストラクタ（コードはセッターメソッドと同じ）
        public function __construct($name, $hitPoint, $attackPoint)
        {
            $this->name = $name;
            $this->hitPoint = $hitPoint;
            $this->attackPoint = $attackPoint;
        }
        //-------------------------------------ここまで $nameのコンストラクタ

        //-------------------------------------$hitPointのゲッターメソッド
        public function getHitPoint()
        {
            return $this->hitPoint;
        }
        //-------------------------------------ここまで $hitPointのゲッターメソッド

        //-------------------------------------$attackPointのゲッターメソッド
        public function getAttackPoint()
        {
            return $this->attackPoint;
        }
        //-------------------------------------ここまで $attackPointのゲッターメソッド
    }

?>