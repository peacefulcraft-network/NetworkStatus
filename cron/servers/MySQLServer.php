<?php
namespace PCN\NetworkStatus\cron\servers;
class MySQLServer implements ProtectedServer{
    private $_ip;
    private $_port;

    private $_username;
    private $_secret;

    public function __construct(String $ip, Int $port, $username, $secret){
        $this->_ip = $ip;
        $this->_port = $port;

        $this->_username = $username;
        $this->_secret = $secret;
    }

    public function getIP(){
        return $this->_ip;
    }

    public function getPort(){
        return $this->_port;
    }

    public function getUsername(){
        return $this->_username;
    }

    public function getSecret(){
        return $this->_secret;
    }
}
?>
