<?php
/**
 * Created by PhpStorm.
 * User: Rizvane
 * Date: 06/07/2018
 * Time: 14:14
 */

namespace Entity;

class EasyMob extends Mob
{
    const DEGATS = 10;
    protected $de;
    private $Alive;

    public function __construct()
    {
        $this->de = new De();
        $this->Alive = true;
    }

    /**
     * @return mixed
     */
    public function getAlive()
    {
        return $this->Alive;
    }

    /**
     * @param mixed $Alive
     */
    public function setAlive($Alive)
    {
        $this->Alive = $Alive;
    }

    public function subitDegats()
    {
        $this->Alive = false;
    }

    public function LaunchDe()
    {
        return $this->de->LaunchDe();
    }

    public function Attaque(Player $player)
    {
        $lanceMob = $this->LaunchDe();
        $lanceMob = $player->LanceLeDe();
        if($lanceMob>$lanceMob)
            $player->ShieldDamage(self::DEGATS);
    }
}