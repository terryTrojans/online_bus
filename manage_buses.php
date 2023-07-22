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
        <title> Manage Buses</title>
        <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
    </head>
    <body>
        <h2> Manage Buses</h2>
        <!-- Display a table with bus data, provide options for adding, editing, or deleting buses -->
        <a href="dashboard.php"> Go back to Dashboard</a><br><br>
        <a href="logout.php"> Logout</a>
    </body>
</html>