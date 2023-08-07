<?php

namespace zK3lvin\command;

use pocketmine\command\{Command, CommandSender};
use pocketmine\Server;
use zK3lvin\Loader;

class BroadCastCommand extends Command
{

    public function __construct()
    {
        parent::__construct("broadcast", "Broadcast message", "/broadcast <message>", ["bc"]);
    }

    public function execute(CommandSender $sender, string $label, array $args): void
    {
        if (count($args) < 1) {
            $sender->sendMessage("§cUse /broadcast (mensaje)");
            return;
        }
        $message = implode(" ", $args);
        foreach ($this->getServer()->getOnlinePlayers() as $player) {
            $player->sendMessage(Loader::$prefix . "§4" . $message);
        }
    }

   # public function getServer(): Server
    #
  #      return Server::getInstance();
   # }
}

