<?php
namespace PCN\NetworkStatus\cron\checks\results;
abstract class CheckResult implements \JsonSerializable{

    protected $result;
        public function getResult(){ return $this->result; }

    public function jsonSerialize(){
        return $this->getResult();
    }
}
?>
