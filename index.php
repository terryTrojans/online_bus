<?php 
session_start();
if(isset($_SESION['admin_id'])){
    header("Location: dashboard.php");
    exit();
}
?>


<!DOCTYPE html>
<!--
Student Name: Willem Kagisho Terry
Student Number: 50932799
ICT 3715 Project 2023
-->
<html>
    
    <head>
        
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
        
    </head>
    
    <body>
        <h2> Admin Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="submit" value="Login">
        </form> 
        <a href="login_parent.php"> Parent Login</a>
    </body>
</html>
