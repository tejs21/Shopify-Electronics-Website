<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="newstyle.css">
    <link rel="shortcut icon" href="images\cart.png" type="image/svg+xml">
    <style>
        h1{
            font-size:37px
        }
        a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}

    </style>
</head>
<body>
    <div id="form">
    <h1 class="h1">Welcome to
          <a class="logo">Shopi<span class="span">fy</span></a>
        </h1>
        <form action="loginpage.php" name="form" method="POST">
            
            <div class="input-field">
            <i class="fas fa-lock"></i>
            <input placeholder="Username" type="text" id="user" name="user"><br><br>
            </div>

            <div class="input-field">
            <i class="fas fa-lock"></i>
            <input placeholder="Password" type="Password" id="pass" name="pass"><br><br>
            </div>
            <input type=submit id="btn" value="login" name="submit"/>
        </form>
        <div style="margin-left:117px">
            <a href="register.php">Register Here</a>
</div>
</body>
</html>