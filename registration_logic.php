<?php
session_start();
include_once("db_connections.php");
 //if($_SERVER("REQUEST_METHOD") == "POST"){
    $user=$_POST['user'];
    $pass=$_POST['psw'];
    $email=$_POST['email'];
    $_SESSION['user']= $user;
    $_SESSION['psw']= $pass;
    $_SESSION['email']= $email;
    $hashpass=password_hash($pass, PASSWORD_BCRYPT);
    if(strlen($pass<8)){
        echo 'password must be atleast 8 character long';
        "<br/>";
       echo "<a href='registration.php'>Return to Registration page</a>";
    }
    $sql="INSERT INTO profiles (username,email,password)
    VALUE(?,?,?)";
    $result = $conn->prepare($sql);
    $result->bind_param("sss",$user,$email,$hashpass);
    if($result->execute()){
        echo "
        <html>
            <head>
                <title>Registration Status</title>
                <meta charset='utf-8'/>
                <meta name='viewport' content='width=device-width,initial-scale=1'/>

            </head>
            <body>
                <h1 style='width: 400px;margin-left:auto;margin-right:auto;
                text-decoration:underline'>Registration Status</h1>
                <p style='color:red; font-weight:bold;font-size:125%;
                width: 300px;text-align:center'>User: $user, successfully registered.</p>
                <div style='display:flex;flex-direction:row ;width: 500px;
                margin-left:auto;margin-right:auto;background-color:#ddd'>
                <a style='flex:1;margin-right:40px;
                align-self:center' href='registration.php'>Return to Registration page</a>
                <a style='flex:2;align-self:center' href='login.php'>Go to Login page</a>
                </div>
            </body>
        </html>
        ";
        
    }
    else{
        echo "registration failed:<br/> Error: $result->error";
    }
    $result->close();
