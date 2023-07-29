<!DOCTYPE html>

<html>
    <head>
        <title>Bus Route MIS Report</title>
        <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
    </head>
    <body>
        <h2>Bus Route MIS Report - Learners per Bus Route</h2>
        
        <?php
        
        // Establish database connection 
        $servername = "127.0.0.1";
        $username = "root";
        $password = "Mam3cPhpMyAd";
        $dbname = "bus_registration";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Retrieve the number of learners registered for each bus route
        $sql = "SELECT bus_route_id, bus_route_name, COUNT(learner_id) AS total_learners
                FROM bus
                GROUP BY bus_route_id, bus_route_name";
        $result = $conn->query($sql);
        ?>
        
        <?php if($result->num_rows > 0) : ?>
        <table>
            <thead>
                <tr>
                    <th>Bus Route ID</th>
                    <th>Bus Route Name</th>
                    <th>Total Learners</th>
                </tr>
            </thead>
    <tbody>
    <?php while($row = $result->fetch_assoc()) : ?>
    <tr>
        <td><?php echo $row['bus_route_id']; ?></td>
        <td><?php echo $row['bus_route_name']; ?></td>
        <td><?php echo $row['total_learners']; ?></td>
    </tr>
    <?php endwhile; ?>
</tbody>
        </table>
        <?php else : ?>
        <p>No bus routes found.</p>
        <?php endif; ?>
        
        <?php 
        $conn->close();
        ?>
        
        <br><br><a href="manage_buses.php"> Go back to Manage Buses</a><br><br>
</html>
