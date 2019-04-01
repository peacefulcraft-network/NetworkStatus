<?php
namespace PCN\NetworkStatus\cron;
interface Server{
    public function getIP();
    public function getPort();
}
?>
