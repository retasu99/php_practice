<?php

    class Enemy
    {
        //=======================================================================プロパティを定義
        const MAX_HITPOINT = 50;
        private $name;
        private $hitPoint = 50;
        private $attackPoint = 10;
        //=======================================================================ここまでプロパティの定義

        //=======================================================================攻撃メソッドの定義
        public function doAttack($target)
        {
            //メッセージ
            echo $this->name ."の攻撃". "\n";
            echo $target->getName() ."に". $this->attackPoint ."のダメージ". "\n";
            //ここまでメッセージ
            
            $target->tookDamage($this->attackPoint);
        }
        //=======================================================================ここまで攻撃メソッドの定義

        //=======================================================================被弾メソッドの定義
        public function tookDamage($damage)
        {
            $this->hitPoint -= $damage;
            
            if ($this->hitPoint < 0) {
                $this->hitPoint = 0;
            }
        }
        //=======================================================================ここまで被弾メソッドの定義

        //=======================================================================$nameのコンストラクタを定義
        public function __construct($name, $hitPoint, $attackPoint)
        {
            $this->name = $name;
            $this->hitPoint = $hitPoint;
            $this->attackPoint = $attackPoint;
        }
        //=======================================================================ここまで $nameのコンストラクタの定義
        
        //$name、$hitPoint、$attackPointのゲッターメソッドを定義
        public function getName()
        {
            return $this->name;
        }

        public function getHitPoint()
        {
            return $this->hitPoint;
        }

        public function getAttackPoint()
        {
            return $this->attackPoint;
        }
        //ここまで $name、$hitPoint、$attackPointのゲッターメソッドの定義

    }

?>