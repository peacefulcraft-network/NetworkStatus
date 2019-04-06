<?php
namespace PCN\NetworkStatus\cron\checks;
use PCN\NetworkStatus\cron\servers\AuthenticatingStatusCheck;

class MySQLServerCheck implements StatusCheck{

    public function addTarget(AuthenticatingStatusCheck $server){
        $this->target[$target->getIP() . ":" . $target->getPort()] = $target;
    }

    public function run(){
        foreach($this->$target as $server){
            //TODO: The Check
        }
    }
}
?>
