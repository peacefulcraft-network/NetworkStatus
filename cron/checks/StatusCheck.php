<?php
namespace PCN\NetworkStatus\cron\checks;
use PCN\NetworkStatus\cron\servers\Server;
abstract class StatusCheck{

    protected $targets = array();
    protected $results = array();
        public function getResults(){ return $this->results; }

    /*
        Add an endpoint to be checked
    */
    abstract public function addTarget(Server $target);

    /*
        Run the check against all endpoints in the list
    */
    abstract public function run();
}
?>
