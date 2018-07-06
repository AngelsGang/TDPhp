<?php
/**
 * Created by PhpStorm.
 * User: Rizvane
 * Date: 06/07/2018
 * Time: 14:14
 */

namespace Entity;

class HardMob extends EasyMob
{
    const DEGATSORT = 5;

    public function Attaque(Player $player)
    {
        parent::Attaque($player);
        $player->ShieldDamage($this->MagicSpell());
    }

    private function MagicSpell(): int
    {
        $valeur = $this->de->LaunchDe();
        if ($this->valeur == 6)
            return 0;

        return self::DEGATSORT * $valeur;
    }
}