<?php
    include ("DB_CONNECTION.php");
    if(empty($_POST["username"]) || empty($_POST["password"])){
        echo "Both fields are required.";
    }
    else{
        session_start();
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sql="SELECT uid FROM users WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($db,$sql);

        if(mysqli_num_rows($result) == 1){
            header("location: home.php"); //redirecting to another page
        }
        else{
            echo "Incorrect Username and password.";
        }
    }




?>