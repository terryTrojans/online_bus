

<!DOCTYPE html>
<html>
    <head>
        <title>Daily MIS Report</title>
        <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
    </head>
    
    <body>
        <h2>Daily MIS Report - Waiting List</h2>
        
        <?php
        // Establish a database connection
        $servername = "127.0.0.1";
        $username = "root";
        $passwoord = "Mam3cPhpMyAd";
        $dbname = "bus_registration";
        
        $conn = new mysqli($servername, $username, $passwoord, $dbname);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Retrieve information about learner on the waiting list
        $sql = "SELECT learner.*, bus.* 
                FROM learner 
                LEFT JOIN bus ON learner.learner_id = bus.learner_id
                WHERE bus.bus_waiting_list_num IS NOT NULL";
        $result = $conn->query($sql);
        ?>
        
        <?php if ($result->num_rows > 0) : ?>          
        <table>
            <thead>
                <tr>
            <th>Learner ID</th>
            <th>Parent ID</th>
            <th>Learner Name</th>
            <th>Learner Surname</th>
            <th>Learner Cell Number</th>
            <th>Learner Grade</th>
            <th>Bus Waiting List Number</th>
            <th>Bus Waiting List Date</th>
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
                    <td><?php echo $row['bus_wait_list_num']; ?></td>
                    <td><?php echo $row['bus_wait_list_date']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else : ?>
        <p>No learners are on the waiting list for bus transportation.</p>
        <?php        endif; ?>
        
        <?php 
        $conn->close();
        ?>
        
        <a href="manage_learners.php"> Go back to Manage Learners</a><br><br>
    </body>
</html>