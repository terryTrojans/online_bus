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
        <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
    </head>
    <body>
        <h2> Manage Learners</h2>
        <!-- Display a table with learner data, provide options for adding, editing, or deleting learners -->
        
        <a href="mis_learner_on_waiting_list.php"> MIS Learner on Waiting List</a><br><br>
        <a href="mis_learners_bus_usage.php">MIS Learner Bus Usage</a><br><br>
        <a href="mis_weekly_report.php">MIS Weekly Report</a><br><br>
        <a href="dashboard.php"> Go back to Dashboard</a><br><br>
        <!-- <a href="logout.php"> Logout</a>  I think one place to logout at is appropriate -->
    </body>
</html>