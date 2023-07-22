<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Parent Login</title>
        <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
    </head>
    <body>
        <h2>Parent Login</h2>
        <form action="process_parent_login.php" method="POST">
            <!-- <label for="parent_email"> Email:</label> -->
            <input type="text" name="username" placeholder="Username"  required><br><br>
                
                <!-- <label for="password"> Password:</label> -->
                <input type="password" name="password"  required><br><br>
                
                <input type="submit" value="Login">
                
        </form>
        
        <p>Don't have an account? <a href="register_parent.php"> Create Account</a></p><br>
        
        <a href="index.php"> Go back to Admin Login</a><br><br>
        
    </body>
</html>
