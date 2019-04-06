<?php
namespace PCN\NetworkStatus\cron\servers;
interface Server{
    public function getNode();
    public function getIP();
    public function getPort();
}
?>
