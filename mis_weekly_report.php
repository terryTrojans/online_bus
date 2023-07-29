<!DOCTYPE html>
<html>
    <head>
        <title>Weekly MIS Report</title>
      <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
    </head>
    <body>
        <h2>Weekly MIS Report - Bus Usage</h2>
        
        <!-- Search Form -->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="GET">
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" required>
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" required><br><br>
            <input type="submit" value="Generate Report">
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
        
        
        // Retrieve bus usage information for the specific week
        if(isset($_GET['start_date']) && isset($_GET['end_date'])) {
            $start_date = $_GET['start_date'];
            $end_date = $_GET['end_date'];
            $sql = "SELECT bus.bus_id, bus.bus_number, bus_usage.usage_type, COUNT(bus_usage.learner_id) AS total_learners
                    FROM bus
                    LEFT JOIN bus_usage ON bus.bus_id = bus_usage.bus_id
                    WHERE bus_usage.usage_date BETWEEN '$start_date' AND '$end_date'
                    GROUP BY bus.bus_id, bus_usage.usage_type";
            $result = $conn->query($sql);
        }
        ?>
        
        <?php if(isset($result) && $result->num_rows > 0) : ?>
        <table>
            <thead>
                <tr>
                    <th>Bus Id</th>
                    <th>Bus Number</th>
                    <th>Usage Type</th>
                    <th>Total Learners</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $row['bus_id']; ?></td>
                    <td><?php echo $row['bus_number']; ?></td>
                    <td><?php echo ucfirst($row['usage_type']); ?></td> <!-- Capitalize the usage type (morning/afternoon) -->
                    <td><?php echo $row['total_learners']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php        elseif (isset($result) && $result->num_rows == 0) : ?> 
        <p>No bus usage recorded for the specified week.</p>
        <?php        endif; ?>
        
        <?php
        $conn->close();
        ?>
        
         <br><br><a href="manage_learners.php"> Go back to Manage Learners</a><br><br>
    </body>
</html>