<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login form without session</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>

    <h1>Hello</h1>
    <br><br>
    <div id="logged in user">
        <h3>Current user: </h3>
        <?php
            session_start();
            $user = $_SESSION["username"];
            echo "Current logged in user is: ".$user.".";
        ?>
    </div>
</body>
</html>