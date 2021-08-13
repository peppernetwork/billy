<?php
$host_name = 'localhost';
$user_name = 'c3billy';
$password = 'vssKNpZ_67';
$database = 'c3billydb';

$connect = mysqli_connect($host_name, $user_name, $password, $database);
mysqli_query($connect, "SET NAMES 'utf8'");
?>
