<!DOCTYPE>
<html lang="eng">
    <head>
        <title>Registration Portal</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <style>
            form div{
                border: 2px solid black;
                margin: 10px 0px 20px 0px;
            }
            form{
                margin-left: auto;
                margin-right: auto;
                width: 550px;
                background-color: #ffdd00;
            }
            label{
                margin-right: 10px;
                font-size: 120%;
                font-weight: bold;
            }
            .inp{
                width:540px;
            }
        </style>
        <body>
            <h1 style="margin-left:auto;margin-right:auto;
            color:red ;text-align:center">Register</h1>
            <form  action="registration_logic.php" method="POST">
                <div>
                <label for="user">User Name</label>
                <input class="inp" type="text" id="user" name="user" placeholder="Enter your user name"
                required/>
                </div>
                <div>
                <label  for="email">e-mail</label>
                <input class="inp" type="email" id="email"name="email" placeholder="your valid e-mail"
                required/>
                </div>
                <div>
                <label for="psw">password</label>
                <input class="inp" type="password" id="psw" name="psw" required/>
                </div>
                
                <input  type="submit" name="Submit" value="submit"/>
            </form>
        </body>
    </head>

</html>