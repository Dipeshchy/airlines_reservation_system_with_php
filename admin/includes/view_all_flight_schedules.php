<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Flight Schedules Id</th>
                                    <th>Flight Date</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Aeroplane Number</th>
                                    <th>Aeroplane Brand</th>
                                   
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.flightschedules";
                $select_flight_schedules=mysqli_query($connection, $query);
                if(!$select_flight_schedules)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_flight_schedules))
            {
                
                        $flight_schedule_id = $row['flight_schedule_id'];
                        $flight_date = $row['flight_date'];
                        $flight_departure_time = $row['departure'];
                        $flight_arrival_time = $row['arrival'];
                        $aeroplane_id = $row['aeroplane_id'];    
                            
                        echo "<tr>";
                            echo   "<td>{$flight_schedule_id}</td>";
                            echo   "<td>{$flight_date}</td>";
                            echo   "<td>{$flight_departure_time}</td>";
                            echo   "<td>{$flight_arrival_time}</td>";
                           
                           $query1 = "SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id = '{$aeroplane_id}' ";
                           $execute_query = mysqli_query($connection , $query1);

                           if(!$execute_query)
                        {
                            die('Failed'.mysqli_error($connection));

                        }
                        while($row = mysqli_fetch_array($execute_query))
                        {
                            $aeroplane_number = $row['aeroplane_number'];
                            $aeroplane_brand = $row['aeroplane_brand'];
                             echo   "<td>{$aeroplane_number}</td>";
                            echo   "<td>{$aeroplane_brand}</td>";
                        }
                             
                            

                           
                           
                            echo "<td><a href='flight_schedules.php?source=edit_flight_schedules&edit_flight_schedule={$flight_schedule_id}'>Edit</a></td>";
                            echo "<td><a href='flight_schedules.php?delete=$flight_schedule_id'>Delete</a></td>";
                           
                        }
                           
                            
                        echo "</tr>";  
               
                        
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $flight_schedules_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.flightschedules WHERE flight_schedule_id = {$flight_schedules_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: flight_schedules.php");

                      
                            }

                         ?>
     