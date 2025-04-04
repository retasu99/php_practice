<?php
    class Enemy
    {
        const MAX_HITPOINT = 50;
        private $name;
        private $hitPoint = 50;
        private $attackPoint = 10;

// ----------------------------------------------------------------------

        public function __construct($name)
        {
            $this->name = $name;
        }

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

// ----------------------------------------------------------------------

        public function doAttack($human)
        {
            // echo " 「" .$this -> name. "」の攻撃! \n";
            // echo " [" .$human -> name. "] に" .$this -> attackPoint. "のダメージ! \n";
            echo "「".$this->getName()."」の攻撃!\n";
            echo "[".$human->getName()."]に".$this->attackPoint."のダメージ!\n";
            $human -> tookDamage($this -> attackPoint);
        }

        public function tookDamage($damage)
        {
            $this -> hitPoint -= $damage;

            if ($this -> hitPoint < 0) {
                $this -> hitPoint = 0;
            }
        }
    }
?>