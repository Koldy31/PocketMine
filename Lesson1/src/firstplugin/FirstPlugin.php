<?php

namespace firstplugin;

use pocketmine\plugin\PluginBase;

class FirstPlugin extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("Плагин успешно загружен");
    }

    public function onLoad(){
        $this->getLogger()->info("Плагин загружается");
    }

    public function onDisable(){
        $this->getLogger()->info("Плагин выключен");
    }

}
