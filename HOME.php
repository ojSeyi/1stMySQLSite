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
    <?php include ("login.php"); ?>
        <h3>Current user: </h3>
        <?php
            $username =  $_GET["username"];
            echo $username;
        ?>

</body>
</html>