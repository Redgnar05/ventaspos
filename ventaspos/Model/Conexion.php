<?php

class conexion{

    private $user;
    private $password;
    private $server;
    private $database;
    private $con;

    public function __construct(){
        
        $user = 'root'; 
        $password = '';
        $server = 'localhost';
        $database = 'icontpos';
        $this -> con = new mysqli($server, $user, $password, $database);
        
    }

    public function getUser($usuario, $password){

        $query = $this->con->query("SELECT * FROM usuarios WHERE login='" . $usuario . "' AND password='" . $password . "'");
    }
    
}





















