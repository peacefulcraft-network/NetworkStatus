<?php
namespace PCN\NetworkStatus\cron\servers;
class MinecraftServer implements Server{
    private $_name;
    private $_node;
    private $_ip;
    private $_port;

    public function __construct(String $name, String $node, String $ip, Int $port){
        $this->_name = $name;
        $this->_node = $node;
        $this->_ip = $ip;
        $this->_port = $port;
    }

    public function getName(){
        return $this->_name;
    }

    public function getNode(){
        return $this->_node;
    }

    public function getIP(){
        return $this->_ip;
    }

    public function getPort(){
        return $this->_port;
    }
}
?>
