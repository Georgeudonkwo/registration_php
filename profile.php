<?php
session_start();
include_once('retrieve_user.php');
$user=null;

if($result->num_rows > 0) {
    $user= $result->fetch_assoc();
    echo "
    <html lang='en'>
        <head>
            <title>Profile Page</title>
            <meta charset='utf-8'/>
            <meta name='viewport' content='width=device-width,initial-scale=1'/>
            <style>
            table{
                width:500px;
                margin-left:auto;
                margin-right:auto;
                margin-bottom:20px;
                background-color:#ddffaa;
                border: 2px solid;
            }
            table th td{
                border: right 2px;
            }
            td{
                text-align:center;
            }
            td:nth-child(1){
                text-transform:capitalize;
                font-weight:bold;
            }
            input:read-only{
            border: 10px;
            box-shadow: none;
            background-color: #ddd;
            }
            </style>

        </head>
        <body>
            <h1 style='margin-left:auto;margin-right:auto;width: 400px;'
            >User Profile</h1>
            <table>
            <thead>
                <th>User </th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                <form action='update.php' method='POST'>
                    <td>user name:</td>
                    <td><input  type='text'name='user'value=$user[username]/></td>
                    <td style='display:none'><input  type='text'name='action'value='updateuser'/></td>
                    <td><input type='submit'name='action'value='updateuser'/></td>
                    <td><input type='submit'name='action'value='delete'/></td>
                </form>
                <tr>
                <tr>
                <form action='update.php' method='POST'>
                    <td>e-mail:</td>
                    <td><input  type='text'name='email'value=$user[email]/></td>
                    <td style='display:none'><input  type='text'name='action'value='updatemail'/></td>
                    <td><input type='submit'name='update'value='updatemail'/></td>
                    
                </form>
                </tr>
                <tr>
                <form action='update.php' method='POST'>
                    <td>password:</td>
                    <td><input  type='password'name='psw'value=$user[password]/></td>
                    <td style='display:none'><input  type='text'name='action'value='updatepsw'/></td>
                    <td><input type='submit'name='update'value='updatepsw'/></td>
                    
                </form>
                </tr>
               
            </tbody>
            
            </table>
            
        </body>
    
    </html>
    
    ";
}

