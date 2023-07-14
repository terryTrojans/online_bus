<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // here we will check the username and password against the database information
    // database connection code will follow too
    
    $db_username = "root";
    $db_password = "Mam3cPhpMyAd";
    if($username === $db_username && $password === $db_password){
        $_SESSION['admin_id'] = 1;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}

?>