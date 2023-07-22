<?php

/* 
 * This code on this form process the parent login details 
 */


session_start();


/* Please note that code works 100% i however had issues with the username. I could not 
 * use a email address as a username "terrypacers@gmail.com" for that reason i could access the database. 
// Esteblish a database connection
$servername = "127.0.0.1";
$username = "terrypacers";
$password = "Mam3cValk21";
$dbname = "bus_registration";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}


// Retrieve form data
$parent_email = $_Post['parent_email'];
$password = $_POST['password'];

// Check parent details against the database
$sql = "SELECT * FROM parent WHERE parent_email = '$parent_email' AND password = '$password'";
$result = $conn->query($sql);

if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $_SESSION['parent_id'] = $row['parent_id'];
    header("Location: registration_form.php");
    exit();
} else {
    echo "Invalid email or password.";
}

$conn->close(); */

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Check username and password against the database
    $db_username = "terrypacers";
    $db_password = "Mam3cValk21";
    if($username === $db_username && $password === $db_password){
        $_SESSION['parent_id'] = 1;
        header("Location: .php");
        exit();
    } else {
    
        echo "Invalid username or password.";
    }
}

?>