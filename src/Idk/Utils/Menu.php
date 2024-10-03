<?php

namespace Idk\Utils;

use Idk\Loader;
use MongoDB\Driver\Server;
use muqsit\invmenu\InvMenu;
use muqsit\invmenu\transaction\InvMenuTransaction;
use muqsit\invmenu\transaction\InvMenuTransactionResult;
use onebone\economyapi\EconomyAPI;
use pocketmine\console\ConsoleCommandSender;
use pocketmine\item\VanillaItems;
use pocketmine\player\Player;
use pocketmine\utils\TextFormat;

class Menu
{
    public static function open(Player $player){
        $menu = InvMenu::create(InvMenu::TYPE_DOUBLE_CHEST);

        $rank1 = VanillaItems::PAPER();
        $rank1->setCustomName(TextFormat::colorize(Loader::getInstance()->getConfig()->get("rank1")));
        $rank1->setLore([TextFormat::WHITE . "Cost: ".Loader::getInstance()->getConfig()->get("ranks1Cost")." coins"]);

        $rank2 = VanillaItems::PAPER();
        $rank2->setCustomName(TextFormat::colorize(Loader::getInstance()->getConfig()->get("rank2")));
        $rank2->setLore([TextFormat::WHITE . "Cost: ".Loader::getInstance()->getConfig()->get("ranks2Cost")." coins"]);

        $rank3 = VanillaItems::PAPER();
        $rank3->setCustomName(TextFormat::colorize(Loader::getInstance()->getConfig()->get("rank3")));
        $rank3->setLore([TextFormat::WHITE . "Cost: ".Loader::getInstance()->getConfig()->get("ranks3Cost")." coins"]);

        $rank4 = VanillaItems::PAPER();
        $rank4->setCustomName(TextFormat::colorize(Loader::getInstance()->getConfig()->get("rank4")));
        $rank4->setLore([TextFormat::WHITE . "Cost: ".Loader::getInstance()->getConfig()->get("ranks4Cost")." coins"]);

        $rank5 = VanillaItems::PAPER();
        $rank5->setCustomName(TextFormat::colorize(Loader::getInstance()->getConfig()->get("rank5")));
        $rank5->setLore([TextFormat::WHITE . "Cost: ".Loader::getInstance()->getConfig()->get("ranks5Cost")." coins"]);

        $rank6 = VanillaItems::PAPER();
        $rank6->setCustomName(TextFormat::colorize(Loader::getInstance()->getConfig()->get("rank6")));
        $rank6->setLore([TextFormat::WHITE . "Cost: ".Loader::getInstance()->getConfig()->get("ranks6Cost")." coins"]);



        $menu->getInventory()->setItem(12, $rank1);
        $menu->getInventory()->setItem(13, $rank2);
        $menu->getInventory()->setItem(14, $rank3);
        $menu->getInventory()->setItem(21, $rank4);
        $menu->getInventory()->setItem(22, $rank5);
        $menu->getInventory()->setItem(23, $rank6);

        $menu->setListener(listener: function (InvMenuTransaction $transaction): InvMenuTransactionResult {
            $player = $transaction->getPlayer();
            $itemClicked = $transaction->getItemClicked();
            $r1 = Loader::getInstance()->getConfig()->get("ranks1Cost");
            $r2 = Loader::getInstance()->getConfig()->get("ranks2Cost");
            $r3 = Loader::getInstance()->getConfig()->get("ranks3Cost");
            $r4 = Loader::getInstance()->getConfig()->get("ranks4Cost");
            $r5 = Loader::getInstance()->getConfig()->get("ranks5Cost");
            $r6 = Loader::getInstance()->getConfig()->get("ranks6Cost");
            $balance = EconomyAPI::getInstance()->myMoney($player);

            if($itemClicked->getCustomName() === Loader::getInstance()->getConfig()->get("rank1")) {

                if($balance >= $r1) {
                    EconomyAPI::getInstance()->reduceMoney($player, $r1);
                    $player->sendMessage(TextFormat::GREEN . "You have purchased the rank!");
                    $command = str_replace(['{player}'], [$player->getName()], Loader::getInstance()->getConfig()->get("SetRankCommand1"));
                    Server::getInstance()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), Server::getInstance()->getLanguage()), $command);
                    return $transaction->discard();
                } else {
                    $player->sendMessage(TextFormat::RED . "You do not have enough money to buy this rank.");
                    return $transaction->discard();
                }
            }
            if($itemClicked->getCustomName() === Loader::getInstance()->getConfig()->get("rank2")) {

                if($balance >= $r2) {
                    EconomyAPI::getInstance()->reduceMoney($player, $r2);
                    $player->sendMessage(TextFormat::GREEN . "You have purchased the rank!");
                    $command = str_replace(['{player}'], [$player->getName()], Loader::getInstance()->getConfig()->get("SetRankCommand2"));
                    Server::getInstance()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), Server::getInstance()->getLanguage()), $command);
                    return $transaction->discard();
                } else {
                    $player->sendMessage(TextFormat::RED . "You do not have enough money to buy this rank.");
                    return $transaction->discard();
                }
            }
            if($itemClicked->getCustomName() === Loader::getInstance()->getConfig()->get("rank3")) {

                if($balance >= $r3) {
                    EconomyAPI::getInstance()->reduceMoney($player, $r3);
                    $player->sendMessage(TextFormat::GREEN . "You have purchased the rank!");
                    $command = str_replace(['{player}'], [$player->getName()], Loader::getInstance()->getConfig()->get("SetRankCommand3"));
                    Server::getInstance()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), Server::getInstance()->getLanguage()), $command);
                    return $transaction->discard();
                } else {
                    $player->sendMessage(TextFormat::RED . "You do not have enough money to buy this rank.");
                    return $transaction->discard();
                }
            }
            if($itemClicked->getCustomName() === Loader::getInstance()->getConfig()->get("rank4")) {

                if($balance >= $r4) {
                    EconomyAPI::getInstance()->reduceMoney($player, $r4);
                    $player->sendMessage(TextFormat::GREEN . "You have purchased the rank!");
                    $command = str_replace(['{player}'], [$player->getName()], Loader::getInstance()->getConfig()->get("SetRankCommand4"));
                    Server::getInstance()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), Server::getInstance()->getLanguage()), $command);
                    return $transaction->discard();
                } else {
                    $player->sendMessage(TextFormat::RED . "You do not have enough money to buy this rank.");
                    return $transaction->discard();
                }
            }
            if($itemClicked->getCustomName() === Loader::getInstance()->getConfig()->get("rank5")) {

                if($balance >= $r5) {
                    EconomyAPI::getInstance()->reduceMoney($player, $r5);
                    $player->sendMessage(TextFormat::GREEN . "You have purchased the rank!");
                    $command = str_replace(['{player}'], [$player->getName()], Loader::getInstance()->getConfig()->get("SetRankCommand5"));
                    Server::getInstance()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), Server::getInstance()->getLanguage()), $command);
                    return $transaction->discard();
                } else {
                    $player->sendMessage(TextFormat::RED . "You do not have enough money to buy this rank.");
                    return $transaction->discard();
                }
            }
            if($itemClicked->getCustomName() === Loader::getInstance()->getConfig()->get("rank6")) {

                if($balance >= $r6) {
                    EconomyAPI::getInstance()->reduceMoney($player, $r6);
                    $player->sendMessage(TextFormat::GREEN . "You have purchased the rank!");
                    $command = str_replace(['{player}'], [$player->getName()], Loader::getInstance()->getConfig()->get("SetRankCommand6"));
                    Server::getInstance()->dispatchCommand(new ConsoleCommandSender(Server::getInstance(), Server::getInstance()->getLanguage()), $command);
                    return $transaction->discard();
                } else {
                    $player->sendMessage(TextFormat::RED . "You do not have enough money to buy this rank.");
                    return $transaction->discard();
                }
            }
            return $transaction->discard();
        });
        $menu->send($player, TextFormat::BLUE."RankShop");
    }
}