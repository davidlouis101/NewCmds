<?php

namespace Crow;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{

    public function onEnable(){
    
    $this->getLogger()->info("Plugin aktiviert");

    }
    
    public function onDisable(){

    $this->getLogger()->info("Plugin Deaktiviert");

    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

        switch($cmd->getName()){

            case "Heal":
                if($sender instanceof Player){
			if($sender->hasPermission("Heal.cmd")){
				$sender->setHealt(20);
				$sender->sendMessage("Du Hast Dich Erfolgreich Geheilt");
			}
			   
                }
            break;

        }

        return true;

    }

}
