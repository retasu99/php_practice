<?php

    class Brave extends Human
    {

        //==============================================================プロパティの上書き
        const MAX_HITPOINT = 120;
        public $hitPoint = self::MAX_HITPOINT;
        public $attackPoint = 30; 
        //==============================================================ここまで プロパティの上書き


        //==============================================================攻撃メソッドのオーバーライド
        public function doAttack($target)
        {
            if (rand(1,3) === 1) {

                // メッセージ
                echo $this->name ."のスキルが発動した \n";
                echo "受け入れる愛!!!!";
                echo $target->name ."に". $this->attackPoint * 1.5 ."のダメージ \n";
                // ここまで メッセージ

                $target->tookDamage($this->attackPoint * 1.5); // 1/3の確率で、doAttackの上書き版を実行
            } else {
                parent::doAttack($target); // 2/3の確率で、Humanクラスで定義したdoAttackを、そのまま実行
            }
        }
        //===============================================================ここまで 攻撃メソッドのオーバーライド
    }

?>