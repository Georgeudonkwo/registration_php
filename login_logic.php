<?php
echo"<h1 style='margin-left:auto;margin-right:auto;width: 400px;'>
Login verification status</h1>";
session_start();

$user=$_POST['user'];
$pass=$_POST['psw'];
//$email=$_POST['email'];
//$hashpass=password_hash($pass, PASSWORD_BCRYPT);
$_SESSION['providedpsw']=$pass;//$hashpass;
$_SESSION['username']=$user;//$hashpass;
echo$user."||";
include_once "retrieve_user.php";
$retpass=null;
if($result->num_rows > 0) {
    $retpass= $result->fetch_assoc()["password"];
    $_SESSION['providedpsw']= $retpass;
    
}
if(password_verify($pass,$retpass)){
    echo "<div style='border: 2px solid black;
    width: 200px;margin-left:auto;margin-right:auto'>
    access granted <a href='profile.php'>proceed</a>
    </div>";
}
else{
    echo "<div style='border: 2px dashed red;
    width: 200px;margin-left:auto;margin-right:auto'>
    <p>access denied!!</p>
    <a href='login.php'>try again</a>
    </div>";
}
