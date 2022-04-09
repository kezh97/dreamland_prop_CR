<?php 

$user = "root@localhost";
$pass = "";
$server = "127.0.0.1";
$db = "test";

$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
	die('Error: (' . $conn->connect_errno .')' . $conn->connect_error);
}

?>
