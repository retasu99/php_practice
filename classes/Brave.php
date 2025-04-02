<?php

class Brave extends Human
{
    const MAX_HITPOINT = 120;
    private $hitPoint = self::MAX_HITPOINT;
    private $attackPoint = 30;

// ----------------------------------------------------------------

    public function __construct($name)
    {
        parent:: __construct($name, $this->hitPoint, $this->attackPoint);
    }

// ----------------------------------------------------------------

    public function doAttack($enemy)
    {
        if (rand(1, 10) === 1) {
            // echo "「".$this->name."」のスキルが発動した！\n";
            echo "「".$this->getName()."」のスキルが発動した!\n";
            echo "「受け入れる愛!!!」\n";
            // echo $enemy->name."に".$this->attackPoint * 1.5."のダメージ\n";
            echo $enemy->getName()."に".$this->attackPoint * 1.5."のダメージ!\n";
            $enemy->tookDamage($this->attackPoint * 1.5);
        } else {
            parent::doAttack($enemy);
        }
        return true;
    }
}
?>