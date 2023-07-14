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
        <title> Manage Learners</title>
    </head>
    <body>
        <h2> Manage Learners</h2>
        <!-- Display a table with learner data, provide options for adding, editing, or deleting learners -->
        <a href="dashboard.php"> Go back to Dashboard</a>
        <a href="logout.php"> Logout</a>
    </body>
</html>