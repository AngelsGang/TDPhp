<?php
/**
 * Created by PhpStorm.
 * User: Rizvane
 * Date: 06/07/2018
 * Time: 14:14
 */

namespace Entity;
class Player
{
    private $de;
    private $Pdv;

    public function __construct($de, $pointDeVie)
    {
        $this->de = new De();
        $this->Pdv = $pointDeVie;
    }

    public function Alive()
    {
        return $this->Pdv > 0;
    }

    public function Attaque(EasyMob $monstre)
    {

    }

    public function LaunchDe()
    {
        return $this->de->LaunchDe();
    }

    public function ShieldDamage(int $degats)
    {
      if(!$this->Shied())
          $this->Pdv -= $degats;
    }

    private function Shied():bool{
        return $this->de->LaunchDe() <= 2;
    }

}