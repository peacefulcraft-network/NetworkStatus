<?php
namespace PCN\NetworkStatus\cron\checks;
use PCN\NetworkStatus\cron\servers\Server;
use PCN\NetworkStatus\cron\checks\results\MinecraftServerCheckResult;
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;

class MinecraftQueryCheck extends StatusCheck{

    public function addTarget(Server $target){
        $this->targets[$target->getName()] = $target;
    }

    public function run(){
        foreach($this->targets as $server){

            try{

                $Query = new MinecraftPing($server->getIP(), $server->getPort());
                $QueryResult = $Query->Query();
                $this->results[$server->getNode() . ":" . $server->getPort()] =
                    new MinecraftServerCheckResult(
                        $server->getName(),
                        true,
                        $QueryResult["players"]["online"]
                    );

            }catch(MinecraftPingException $e){

                $this->results[$server->getNode()] =
                    new MinecraftServerCheckResult(
                        $server->getName(),
                        false,
                        0
                    );

            }
        }
    }
}
