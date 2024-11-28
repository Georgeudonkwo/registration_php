<?php
session_start();

include_once("db_connections.php");
include_once("retrieve_user.php");
$sql='';
if($_POST['action']=='updateuser'){
$user=$_POST['user'];
$olduser=$_SESSION['username'];
$sql="UPDATE profiles set username= ? WHERE username=?";
$statement=$conn->prepare($sql);
$statement->bind_param("ss",$user,$olduser);
$statement->execute();
echo"<h1 style='margin-left:auto;margin-right:auto;
width: 400px;color:green; margin-bottom 40px;> User Name Update Status</h1>
<br/>
<div style='text-align:center;width:400px;'>
<p>user name updated successful!!</p>
<a href='login.php'>Go back</a>
<a href='Logout.php'>Exit</a>
</div>

";
$_SESSION['user']= $user;
    
}
else if($_POST['action']=='updatepsw'){
    $pass=$_POST['psw'];
    $oldpsw=$_SESSION['psw'];
    $hashpass=password_hash($pass, PASSWORD_BCRYPT);
    $sql="UPDATE profiles set password= ? WHERE password=?";
    $statement=$conn->prepare($sql);
    $statement->bind_param("ss",$hashpass,$oldpsw);
    $statement->execute();
    echo"<h1 style='margin-left:auto;margin-right:auto;
width: 400px;color:green; margin-bottom 40px;> password Update Status</h1>
<br/>
<div style='text-align:center;width:400px;'>
<p>password updated successful!!</p>
<a href='login.php'>Go back</a>
<a href='Logout.php'>Exit</a>
</div>

";
    $_SESSION['psw']= $hashpass;
    }
    else if($_POST['action']=='updatemail'){
        $email=$_POST['email'];
        $oldmail=$_SESSION['email'];
        $sql="UPDATE profiles set email= ? WHERE email=?";
        $statement=$conn->prepare($sql);
        $statement->bind_param("ss",$email,$oldmail);
        $statement->execute();
        echo"<h1 style='margin-left:auto;margin-right:auto;
width: 400px;color:green; margin-bottom 40px;> e-mail Update Status</h1>
<br/>
<div style='text-align:center;width:400px;'>
<p>e-mail updated successful!!</p>
<a href='login.php'>Go back</a>
<a href='Logout.php'>Exit</a>
</div>

";
        $_SESSION['email']= $email;
        }
else if($_POST["action"]== "delete"){
    $olduser=$_SESSION["username"];
    $sql="DELETE FROM profiles  WHERE username=?";
    echo "delete action excuting!!";
    $statement=$conn->prepare($sql);
    $statement->bind_param("s",$olduser);
    $statement->execute();
    echo"<h1 style='margin-left:auto;margin-right:auto;
width: 400px;color:green; margin-bottom 40px;>Delete Status</h1>
<br/>
<div style='text-align:center;width:400px;'>
<p>user deleted  successful!!</p>
<a href='login.php'>Go back</a>
<a href='Logout.php'>Exit</a>
</div>

";
}
