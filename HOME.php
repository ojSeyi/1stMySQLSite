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

        <h3>Current user: </h3>
        <?php
            include ("login.php");
            $username = mysql_fetch_field($result, 1);
            echo $username;
        ?>

</body>
</html>