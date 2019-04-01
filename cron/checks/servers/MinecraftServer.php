<?php
namespace PCN\NetworkStatus\cron\servers;
class MinecraftServer implements Server{
    private $_ip;
    private $_port;

    public function __construct(String $ip, Int $port){
        $this->_ip = $ip;
        $this->_port = $port;
    }

    public function getIP(){
        return $this->_ip;
    }

    public function getPort(){
        return $this->_port;
    }
}
?>
