<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
 <head>
     <title>Billy</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="../../css/style.css" type="text/css">
     <script src="../../js/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 </head>
<body>