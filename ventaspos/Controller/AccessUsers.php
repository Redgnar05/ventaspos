<?php
require ('../Model/Conexion.php');

$usuario = $_GET['usuario'];
$password = $_GET['password'];

$con = new conexion();

$searchUser = $con->getUser($usuario, $password);


