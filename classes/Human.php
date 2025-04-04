<?php
    class Human
    {
        const MAX_HITPOINT = 100;
        private $name;
        private $hitPoint = 100;
        private $attackPoint = 20;

        public function __construct($name, $hitPoint = 100, $attackPoint = 20)
        {
            $this->name = $name;
            $this->hitPoint = $hitPoint;
            $this->attackPoint = $attackPoint;
        }

        public function doAttack($enemy)
        {
            // echo "「" .$this -> name. "」の攻撃! \n";
            // echo " [" .$enemy -> name. "] に" .$this -> attackPoint . "のダメージ! \n";
            echo "「" .$this->getName(). "」の攻撃! \n";
            echo "[" .$enemy->getName(). "]に" .$this->attackPoint. "のダメージ! \n";
            $enemy -> tookDamage($this -> attackPoint);
        }

        public function tookDamage($damage)
        {
            $this -> hitPoint -= $damage;
            if ($this -> hitPoint < 0) {
                $this -> hitPoint = 0;
            }
        }

// ============================================================

        public function getName()
        {
            return $this->name;
        }

        // public function setName()
        // {
        //     $this->name = $name;
        // }

// ----------------------------------------------------------------

        public function getHitPoint()
        {
            return $this->hitPoint;
        }

        public function getAttackPoint()
        {
            return $this->attackPoint;
        }
    }
?>