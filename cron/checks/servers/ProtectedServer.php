<?php
namespace PCN\NetworkStatus\cron\servers;
interface ProtectedServer extends Server{
    public function getUsername();
    public function getSecret();
}
?>
