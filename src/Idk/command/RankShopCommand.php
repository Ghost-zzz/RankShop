<?php

namespace Idk\command;

use Idk\Utils\Menu;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\player\Player;

class RankShopCommand extends Command
{

    public function __construct(string $name, $description = "", $usageMessage = null, array $aliases = [])
    {
        parent::__construct($name, $description, $usageMessage, $aliases);
    }

    /**
     * @inheritDoc
     */
    public function execute(CommandSender $player, string $label, array $args): void
    {
        if (!$player instanceof Player)
            return;

        Menu::open($player);
    }
}