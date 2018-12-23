<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Route Id</th>
                                    <th>Route Starting Airport</th>
                                    <th>Route Destination</th>
                                   
                                   
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.routes";
                $select_routes=mysqli_query($connection, $query);
                if(!$select_routes)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_routes))
            {
                
                        $route_id = $row['route_id'];
                        $route_starting_airport = $row['starting_airport'];
                        $route_destination = $row['destination'];
                           
                            
                        echo "<tr>";
                            echo   "<td>{$route_id}</td>";
                            echo   "<td>{$route_starting_airport}</td>";
                            echo   "<td>{$route_destination}</td>";
                            
                             
                            

                           
                           
                            // echo "<td><a href='routes.php?source=edit_routes&edit_route={$route_id}'>Edit</a></td>";
                            echo "<td><a href='routes.php?delete=$route_id'>Delete</a></td>";
                           
                            
                        echo "</tr>";  
               
                        }
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $route_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.routes WHERE route_id = {$route_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: routes.php");

                      
                            }

                         ?>
     