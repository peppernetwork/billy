<?php
$host_name = 'localhost';
$user_name = 'user';
$password = 'password';
$database = 'database';

$connect = mysqli_connect($host_name, $user_name, $password, $database);
mysqli_query($connect, "SET NAMES 'utf8'");
?>
