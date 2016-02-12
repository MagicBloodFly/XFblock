<?php
namespace cd;

use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\utils\Config;

class cd extends PluginBase implements Listener{
 public function onEnable(){
     @mkdir($this->getDataFolder());
	$this->config = new Config($this->getDataFolder() . "Config.yml", CONFIG::YAML ,array(
	"物品" => "340",
	"内容" => "无",
		));	
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	$this->getLogger()->info("§e菜单插件启用成功作者:Magic雪飞.");
	}
public function onLoad(){
  $this->getLogger()->info("§b=给小学生的一封信=\n§c本插件完全免费,倒卖必究\n§c版权请勿随意乱改\n§b=========");
	}
	public function onPlayerInteract(PlayerInteractEvent $event)
	{
	$nr = $this->config->get("内容");
	$wp = $this->config->get("物品");
	
		if($event->getItem()->getId()!= $wp)
		{
		return;
		}
		$player = $event->getPlayer();
	$player->sendMessage($nr);
	}
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	