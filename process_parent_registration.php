<?php

/* 
 * This form will process the parent registration and verify information provided
 * 
 * 
 */

// Esteblish a database connection
$servername = "127.0.0.1";
$username = "terrypacers";
$password = "Mam3cValk21";
$dbname = "bus_registration";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$parent_id = $_POST['parent_id'];
$learner_id = $_POST['learner_id'];
$parent_name = $_POST['parent_name'];
$parent_surname = $_POST['parent_surname'];
$password = $_POST['password'];
$parent_cell_num = $_POST['parent_cell_num'];
$parent_email = $_POST['parent_email'];

// Check if the parent email already exist in the database
$sql = "SELECT * FROM parent WHERE parent_email = '$parent_email'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Parent email already exist. Please login instead.";
}
 else {
     // Insert parent data into the database
     $sql = "INSERT INTO parent (parent_id, learner_id, parent_name, parent_surname, password, parent_cell_num, parent_email)VALUES ('$parent_id', '$learner_id', '$parent_name', '$parent_surname', '$password', '$parent_cell_num', '$parent_email')";
     if($conn->query($sql)=== TRUE){
         echo "Parent registration successful! Please login to proceed.";
     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;    
     }
    
}

$conn->close();

?>