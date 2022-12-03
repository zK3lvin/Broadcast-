<?php

namespace zK3lvin;

use pocketmine\plugin\PluginBase;
use zK3lvin\command\BroadCastCommand;

class Loader extends PluginBase {
  
   public static $prefix = '§2(Test)';
      
   public function onEnable(): void
    {
        $this->getServer()->getCommandMap()->register("/bc", new BroadCastCommand($this));
}
}