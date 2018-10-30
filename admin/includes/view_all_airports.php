<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Airport Id</th>
                                    <th>Airport Location</th>
                                    
                                   
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.airports";
                $select_airports=mysqli_query($connection, $query);
                if(!$select_airports)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_airports))
            {
                
                        $airport_id = $row['airport_id'];
                        $airport_location = $row['airport_location'];
                           
                            
                        echo "<tr>";
                            echo   "<td>{$airport_id}</td>";
                            echo   "<td>{$airport_location}</td>";
                            
                             
                            

                           
                           
                            echo "<td><a href='airports.php?source=edit_airports&edit_airport={$airport_id}'>Edit</a></td>";
                            echo "<td><a href='airports.php?delete=$airport_id'>Delete</a></td>";
                           
                            
                        echo "</tr>";  
               
                        }
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $airport_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.airports WHERE airport_id = {$airport_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: airports.php");

                      
                            }

                         ?>
     