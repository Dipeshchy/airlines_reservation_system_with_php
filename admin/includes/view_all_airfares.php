<!-- font awesome cdn -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Airfare Id</th>
                                    <th>Aeroplane Number/Name</th>
                                    <th>Route</th>
                                    <th>Airfare</th>
                                   
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.airfare";
                $select_airfares=mysqli_query($connection, $query);
                if(!$select_airfares)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_airfares))
            {
                
                        $airfare_id = $row['airfare_id'];
                        $aeroplane_id = $row['aeroplane_id'];
                        $route_id = $row['route_id'];
                        $airfare = $row['fare'];    
                            

            //     $query1= "SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id = '{$aeroplane_id}' ";
            //     $select_aeroplanes=mysqli_query($connection, $query1);
            //     if(!$select_aeroplanes)
            //     {
            //         die('Error'.mysqli_error($connection));
            //     }

            //     while($row=mysqli_fetch_array($select_aeroplanes))
            // {
                
            //             $aeroplane_id = $row['aeroplane_id'];
            //             $aeroplane_number = $row['aeroplane_number'];
            //             $aeroplane_brand = $row['aeroplane_brand'];

            //     $query2= "SELECT * FROM airlines_reservation_system.routes";
            //     $select_routes=mysqli_query($connection, $query2);
            //     if(!$select_routes)
            //     {
            //         die('Error'.mysqli_error($connection));
            //     }

            //     while($row=mysqli_fetch_array($select_routes))
            // {
                
            //             $route_id = $row['route_id'];
            //             $route_starting_airport = $row['starting_airport'];
            //             $route_destination = $row['destination'];

                        echo "<tr>";
                            echo   "<td>{$airfare_id}</td>";

                              $query1= "SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id = '{$aeroplane_id}' ";
                $select_aeroplanes=mysqli_query($connection, $query1);
                if(!$select_aeroplanes)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_aeroplanes))
            {
                
                        $aeroplane_id = $row['aeroplane_id'];
                        $aeroplane_number = $row['aeroplane_number'];
                        $aeroplane_brand = $row['aeroplane_brand'];
                            echo   "<td>{$aeroplane_number} {$aeroplane_brand}</td>";
                        }

                        $query2= "SELECT * FROM airlines_reservation_system.routes";
                $select_routes=mysqli_query($connection, $query2);
                if(!$select_routes)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_routes))
            {
                
                        $route_id = $row['route_id'];
                        $route_starting_airport = $row['starting_airport'];
                        $route_destination = $row['destination'];
                            echo   "<td>{$route_starting_airport} <i class='fas fa-arrows-alt-h'></i> {$route_destination} </td>";
                        }
                            echo   "<td>&#8377; {$airfare}</td>";
                             
                            

                           
                           
                            echo "<td><a href='airfares.php?source=edit_airfares&edit_airfare={$airfare_id}'>Edit</a></td>";
                            echo "<td><a href='airfares.php?delete=$airfare_id'>Delete</a></td>";
                           
                            
                        echo "</tr>";  
               
                      
                         
                         }       
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $airfare_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.airfare WHERE airfare_id = {$airfare_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: airfares.php");

                      
                            }

                         ?>
     