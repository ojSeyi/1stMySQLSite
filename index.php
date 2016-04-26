<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login form without session</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <h1>Login form without session</h1>
    <div class="loginbox">
        <h3>Login Form</h3>
        <br><br>
        <form method="post" action="login.php">
            <label>Username</label><br>
            <input type="text" name="username" placeholder="username"/><br><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="password"/><br><br>
            <input type="submit" name="submit" placeholder="login"/>
        </form>
        <div class="error">
            <?php
                //echo $error
            ?>
            <?php
                //echo $username; echo $password
            ?>
        </div>
    </div>
</body>
</html>