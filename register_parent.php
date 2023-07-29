<?php

/* 
 *Student Number:   50932799
 *Student Name:     W K Terry
 * ICT 
 * This code registers the parent if he/she does not have have an account, with a username and password. 
 */
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Parent Registration </title>
        <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
    </head>
    <body>
        <h2> Parent Registration </h2>
        <form action="process_parent_registration.php" method="POST">
            <label for="parent_id">Parent Id:</label>
            <input type="number" name="parent_id"><br>
            
            <label for="learner_id">Learner Id:</label>
            <input type="number" name="learner_id" required><br>
            
            <label for="parent_name">Parent Name:</label>
            <input type="text" name="parent_name" required><br>
            
            <label for="parent_surname">Parent Surname:</label>
            <input type="text" name="parent_surname" required><br>
            
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            
            <label for="parent_cell_num">Parent Cell Number:</label>
            <input type="text" name="parent_cell_num" required><br>
            
            <label for="parent_email">Parent Email:</label>
            <input type="email" name="parent_email" required><br><br>
            
            <input type="submit" value="Register">
        </form>
     
        
        <a href="login_parent.php">Go back to Parent Login</a><br><br>
    </body>
</html>