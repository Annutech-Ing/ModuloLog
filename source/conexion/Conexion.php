<?php

class Conexion {
    
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $dbname="ventas";

    public $conn;
    
    function conectar()
    {       
        $this->conn = mysqli_connect($this->host,$this->user,$this->pass, $this->dbname);
        return $this->conn;
    }
    
    function desconectar()
    {
        mysqli_close($this->conn);
    }
}
