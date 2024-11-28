<?php
include "db_connections.php";
session_start();
$conn->close();
session_destroy();
exit() ;
