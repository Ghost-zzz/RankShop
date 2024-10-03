<?php

namespace Idk;

use Idk\command\RankShopCommand;
use muqsit\invmenu\InvMenuHandler;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Loader extends PluginBase
{
    use SingletonTrait;

    public function onLoad(): void{self::setInstance($this);}

    public function onEnable(): void
    {
        if(!InvMenuHandler::isRegistered()){
            InvMenuHandler::register($this);
        }
        $this->getServer()->getCommandMap()->register("", new RankShopCommand("rankshop", "Comando para abrir menu para comprar ranks", "/rankshop", "rshop"));
    }
}