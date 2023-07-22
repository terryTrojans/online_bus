

<!DOCTYPE html>
<html>
    <head>
        <title>Daily MIS Report</title>
        <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
    </head>
    
    <body>
        <h2>Daily MIS Report - Bus Usage</h2>
        
        <!-- Search Form: this is the search (drill-down) functionality -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <label for="search_date">Select Date:</label>
            <input type="date" name="search_date" required>
            <input type="submit" value="Search"
        </form>
        
        <?php
        // Establish a database connection
        $servername = "127.0.0.1";
        $username = "root";
        $password = "Mam3cPhpMyAd";
        $dbname = "bus_registration";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        
       
          // Retrieve bus usage information for specific days of the week
          // $specific_date = "2023-07-20"; // desired date indicator, it can be changed
         // Retrieve bus usage information based on the search date provided
        if(isset($_GET['search_date'])){
            $search_date = $_GET['search_date'];
        
        $sql = "SELECT learner.*, bus.*, bus_usage.usage_type 
                FROM bus_usage 
                INNER JOIN learner ON bus_usage.learner_id = learner.learner_id
                INNER JOIN bus ON bus_usage.bus_id = bus.bus_id
                WHERE bus_usage.usage_date = '$search_date' ";  //$specific_date'; This code is for a specific date as set out in the code
        $result = $conn->query($sql);
        }
        ?>
        
        <?php if (isset($result) && $result->num_rows > 0) : ?>          
        <table>
            <thead>
                <tr>
            <th>Learner ID</th>
            <th>Parent ID</th>
            <th>Learner Name</th>
            <th>Learner Surname</th>
            <th>Learner Cell Number</th>
            <th>Learner Grade</th>
            <th>Bus Number</th>
            <th>Usage Type</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row['learner_id']; ?></td>
                    <td><?php echo $row['parent_id']; ?></td>
                    <td><?php echo $row['learner_name']; ?></td>
                    <td><?php echo $row['learner_surname']; ?></td>
                    <td><?php echo $row['learner_cell_num']; ?></td>
                    <td><?php echo $row['learner_grade']; ?></td>
                    <td><?php echo $row['bus_number']; ?></td>
                    <td><?php echo ucfirst($row['usage_type']); ?></td> <!-- Capitalize the usage type (morning/afternoon) -->
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php elseif(isset($result) && $result->num_rows == 0) : ?>
        <p>No bus usage recorded for the spelected date.</p>
        <?php        endif; ?>
        
        <?php 
        $conn->close();
        ?>
        
        <br><br><a href="manage_learners.php"> Go back to Manage Learners</a><br><br>
    </body>
</html>