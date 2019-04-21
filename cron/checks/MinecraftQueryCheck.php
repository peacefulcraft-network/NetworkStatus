<?php
namespace PCN\NetworkStatus\cron\checks;
use PCN\NetworkStatus\cron\servers\Server;
use PCN\NetworkStatus\cron\checks\results\MinecraftServerCheckResult;
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;

class MinecraftQueryCheck extends StatusCheck{

    public function addTarget(Server $target){
<<<<<<< Updated upstream
        $this->targets[$target->getNode()] = $target;
=======
        $this->targets[$target->getName()] = $target;
>>>>>>> Stashed changes
    }

    public function run(){
        foreach($this->targets as $server){

            try{

                $Query = new MinecraftPing($server->getIP(), $server->getPort());
                $QueryResult = $Query->Query();
                $this->results[$server->getNode() . ":" . $server->getPort()] =
                    new MinecraftServerCheckResult(
                        $server_>getName(),
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
