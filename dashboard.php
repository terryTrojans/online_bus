<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


session_start();
if(!isset($_SESSION['admin_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
    </head>
    <body>
        <h2>Welcome, Administrator...</h2>
        <ul>
            <li><a href="manage_buses.php"> Manage Buses</a></li>
            <li><a href="manage_learners.php"> Manage Learners</a></li>
            <li><a href="manage_parents.php"> Manage Parents</a></li>
        </ul>
        
        <a href="logout.php"> Logout</a>
    </body>
</html>