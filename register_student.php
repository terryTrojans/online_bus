<!DOCTYPE html>
<!--
Student Name: Willem Kagisho Terry
Student Number: 50932799
ICT 3715 Project 2023
-->
<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title>Impumelelo High School</title>
        <link rel="stylesheet" type="text/css" href="cascadeStyleSheet.css">
    
    </head>
    
    <body>
        
        <h2>Bus Registration Form</h2>
        <form action="Register.php" method="POST">
            
            <h3>Morning</h3>
            <label for="pick_up_num">Pick Up Number:</label>
            <select name="pick_up_num" id="pick_up_num">
                <?php
                // Array of pick up numbers
                $pick_up_num = array("1A", "1B", "2A", "2B", "3A", "3B");
                
                //loop through the pick up numbers and generate the <option> tags
                foreach ($pick_up_num as $pick_up){
                    echo "<option value= '$pick_up'>$pick_up</option>";
                }
                ?>
            </select><br><br>
            
            <label for="pick_up_point_name">Pick Up Point Name:</label>
            <select name="pick_up_point_name" id="pick_up_point_name">
                <?php
                //Array of name of pick up points
                $pick_up_point_name = array("Corner of Panorama and Marabou Road", "Corner of Kolgansstraat and Skimmerstraat"
                    , "Corner of Reddersburg Street and Mafeking Drive", "Corner of Theuns van Niekerkstraat and Roosmarystraat",
                    "Corner of Jasper Drive and Tieroog Street", "Corner of Louise Street and Von Willich Drive");
                
                //loop through the name of pick up points and generate the <option> tags
                foreach ($pick_up_point_name as $pick_up_point){
                    echo "<option value = '$pick_up_point'>$pick_up_point</option>";
                }
                ?>
            </select><br><br>
            
            <label for="bus_route_number">Bus Route Number:</label>
            <select name="bus_route_number" id="bus_route_number">
                <?php
                // Array of bus route numbers in the morning
                $bus_route_number_mornign = array("1 = Rooihuiskraal/The Reeds", "2 = Wierdapark/Amberfields", "3 = Centurion");
                
                //loop through the bus route numbers and generate the <option> tags
                foreach ($bus_route_number_mornign as $bus_route_num_m){
                    echo "<option value = '$bus_route_num_m'>$bus_route_num_m</option>";
                }
                ?>
            </select><br><br>
            
            <labale for="bus_number">Bus Number:</labale>
            <select name="bus_number" id="bus_number">
                <?php
                // Array of bus numbers
                $bus_number = array("1","2","3");
                
                // loop through the bus numbers and generate the <option> tags
                foreach ($bus_number as $bus_num){
                    echo "<option value = '$bus_num'>$bus_num</option>";
                }
                ?>
            </select><br><br>
            
             <h3>Afternoon</h3>
             <lable for="drop_off_number">Drop Off Number:</lable>
             <select name="drop_off_number" id="drop_off_number">
                 
                 <?php
                 // Array of drop off numbers
                 $drop_off_number = array("1A", "1B", "2A", "2B", "3A", "3B");
                 
                 // loop through the bus drop off numbers and generate the <option> tags
                 foreach ($drop_off_number as $drop_off_num){
                     echo "<option value = '$drop_off_num'>$drop_off_num</option>";
                 }
                 ?>
             </select><br><br>
                    
             <label for="drop_off_point_name">Drop Off Point Name:</label>
             <select name="drop_off_point_name" id="drop_off_point_name">
                 
                 <?php
                 // Array of drop off point names
                 $drop_off_point_name = array("Corner of Panorama and Marabou Road", "Corner of Kolganstraat and skimmerstraat",
                     "Corner of Reddersburg Street and Mafeking Drive", "Corner of Theuns van Niekerkstraat and Roosmarynstraat", 
                     "Corner of Jasper Drive and Tieroog Street", "Corner of Louise Street and Von Willich Drive");
                 
                 // loop through the drop off point names and generate the <option> tags
                 foreach ($drop_off_point_name as $drop_off_point_n){
                     echo "<option value = '$drop_off_point_n'>$drop_off_point_n</option>";
                 }  
                 ?>
             </select><br><br>
             
              <label for="bus_route_number">Bus Route Number:</label>
            <select name="bus_route_number" id="bus_route_number">
                <?php
                // Array of bus route numbers for afternoon
                $bus_route_number_afternoon = array("1 = Rooihuiskraal/The Reeds", "2 = Wierdapark/Amberfields", "3 = Centurion");
                
                //loop through the bus route numbers and generate the <option> tags
                foreach ($bus_route_number_afternoon as $bus_route_num_aft){
                    echo "<option value = '$bus_route_num_aft'>$bus_route_num_aft</option>";
                }
                ?>
            </select><br><br>
            
            
            <labale for="bus_number_afternoon">Bus Number:</labale>
            <select name="bus_number_afternoon" id="bus_number_afternoon">
                <?php
                // Array of bus numbers for the afternoon
                $bus_number_afternoon = array("1","2","3");
                
                // loop through the bus numbers and generate the <option> tags
                foreach ($bus_number_afternoon as $bus_num_aft){
                    echo "<option value = '$bus_num_aft'>$bus_num_aft</option>";
                }
                ?>
            </select><br><br>
            
            <h3>Learner Information</h3>
            <label for="learner_name">Learner Name:</label>
            <input type="text" id="learner_name" name="learner_name" required><br><br>
            
            <label for="learner_surname">Surname:</label>
            <input type="text" id="learner_surname" name="learner_surname" required><br><br>
            
            <label for="grade_in_2024_curnt">Current Bus Learner Grade in 2024:</label>
            <select name="grade_in_2024_curnt" id="grade_in_2024_curnt">
             
                    
                <?php
               
                // Array of the grade current student using the bus will be in, in 2024
                $grade_in_2024_of_current_user = array("8", "9", "10", "11", "12");
                
                // loop through the grades and generate the <option> tags
                foreach ($grade_in_2024_of_current_user as $grade_in_2024_cur_us){
                    echo "<option value = '$grade_in_2024_cur_us'>$grade_in_2024_cur_us</option>";
                }
                ?>
            </select><br><br>
            
            <label for="grade_in_2024_new"> New Learner Grade in 2024:</label>
            <select name="grade_in_2024_new" id="grade_in_2024_new">
            
            <?php
            
            // Array of the grade new student using the bus will be, in 2024
            $grade_in_2024_new = array("8","9","10","11","12");
            
            // loop through the grades and generate the <option> tags
            foreach ($grade_in_2024_new as $grade_in_2024_new){
                echo "<option value '$grade_in_2024_new'>$grade_in_2024_new</option>";
            }
            ?>
            </select><br><br>
            
            <h3> Contact Numbers</h3>
            <label for="parent_contact_num">Parent Contact Number:</label>
            <input type="number" id="parent_contact_num" name="parent_contact_num" required><br><br>
            
            <label for="learner_contact_num"> Learner Contact Number:</label>
            <input type="number" id="learner_contact_num" name="learner_contact_num" required><br><br>
                   
            
            <input type="submit" value="Register">
        </form>    
        
        
        
        
        
        <?php
        // php code comes here 
        ?>
    </body>
</html>





<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

