<?php
/**
 * Created by PhpStorm.
 * User: Rizvane
 * Date: 06/07/2018
 * Time: 14:54
 */

namespace Entity;


abstract class Mob
{
    public abstract function Attaque(Player $player);
}