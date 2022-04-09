<?php 

$user = "root";
$pass = "";
$server = "127.0.0.1";
$db = "test";

$conn = new mysqli($server, $user, $pass);
$conn->select_db($db);
if ($conn->connect_error) {
	die('Error: (' . $conn->connect_errno .')' . $conn->connect_error);
}

?>
