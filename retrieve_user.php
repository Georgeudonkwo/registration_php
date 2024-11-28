<?php
//session_start();
include_once "db_connections.php";
$sql="SELECT * FROM profiles WHERE username=?";
$statement=$conn->prepare($sql);
$statement->bind_param("s",$_SESSION["username"]);
$statement->execute();
$result=$statement->get_result();