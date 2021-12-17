<?php

$server="localhost"; 
$user="user";
$pass="123456789";
$db="venezon";


$mysqli = new mysqli($server, $user, $pass, $db);

/* comprobar la conexión */
if ($mysqli->connect_errno) {
    	
  	printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
        
}

$mysqli->set_charset("utf8");



?>