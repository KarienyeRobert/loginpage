<?php
 include  ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="login">
    <div class="error" id="error"></div>
    <h1>Login</h1>
    <form name="form" id="form" action="login.php" method="post">
        <input name="userName" id="userName" class="input" type="text" placeholder="UserName">
        <input name="pass" id="password" class="input" type="password" placeholder="Password">
        <input name="submit" id="login" class="button" type="submit" value="Login">
    </form>
    <a href="#">Forgot password?</a><br>
    <a href="#">SignUp instead</a>
   </div>
    
    <script src="script.js"></script>
</body>
</html>