<?php
namespace PCN\NetworkStatus\cron\checks\results;
class MinecraftServerCheckResult extends CheckResult{

    public function isOnline(){ return $this->result; }

    private $_usersOnline;
        public function usersOnline(){ return $this->_usersOnline; }

    public function __construct(string $name, bool $online, int $usersOnline){
        $this->name = $name;
        $this->result = $online;
        $this->_usersOnline = $usersOnline;
    }

    public function jsonSerialize(){
        return [
                "name"=>$this->name,
                "online"=>$this->result,
                "usersOnline"=>$this->_usersOnline,
                ];
    }
}
?>
