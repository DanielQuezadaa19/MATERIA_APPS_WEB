<?php

class ConectionBD {
    private $host;
    private $user;
    private $password;
    private $nameBD;
    private $connection;

    
    public function __construct($host = "localhost", $user = "root", $password = "", $nameBD = "mundial2026") {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->nameBD = $nameBD;

        
        $this->connect();
    }

    
    private function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->nameBD);

    
        if ($this->connection->connect_error) {
            die("Error de conexion: " . $this->connection->connect_error);
        }
    }

    
    public function getConnection() {
        return $this->connection;
    }
}


$datos = new ConectionBD();
$conn = $datos->getConnection();


?>
