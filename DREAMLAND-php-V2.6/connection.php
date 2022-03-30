<?php 

function connect_db(){
	$user = "root@localhost";
	$pass = "";
	$server = "127.0.0.1";
	$db = "test";

	$enlace = mysqli_connect($server, $user, $pass) or die("Error al intentar conectar a la base de datos.");
	mysqlI_select_db($enlace, $db);

	return $enlace;
}

 ?>