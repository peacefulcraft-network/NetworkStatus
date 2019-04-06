<?php
namespace PCN\NetworkStatus\cron\checks\results;
class MinecraftServerCheckResult extends CheckResult{

    public function isOnline(){ return $this->result; }

    private $_usersOnline;
        public function usersOnline(){ return $this->_usersOnline; }

    public function __construct(string $node, bool $online, int $usersOnline){
        $this->node = $node;
        $this->result = $online;
        $this->_usersOnline = $usersOnline;
    }

    public function jsonSerialize(){
        return [
                "node"=>$this->node,
                "online"=>$this->result,
                "usersOnline"=>$this->_usersOnline,
                ];
    }
}
?>
