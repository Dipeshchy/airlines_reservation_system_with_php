<!-- font awesome cdn -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<?php

include("../database/db.php");
?>

<?php 
include('../functions.php');

 ?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Flight Id</th>
                                    <th>Aeroplane Number</th>
                                    <th>Aeroplane Brand</th>
                                    <th>Aeroplane Capacity</th>
                                    <th>Reserved Seats</th>
                                    <th>Vacant Seats</th>
                                    <th>Flight Date</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Route</th>
                                    <th>Air Fare</th>
                                    <th>Discount</th>
                                    <th>Status</th>
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= execute_query("SELECT * FROM airlines_reservation_system.flights");
               
               confirm($query);

                while($row=fetch_array($query))
            {
                
                        $flight_id = $row['flight_id']; 
                        $aeroplane_id = $row['aeroplane_id'];
                         $aeroplane_capacity = $row['aeroplane_capacity'];
                        $reserved_seats = $row['reserved_seats'];

                        $vacant_seats = $row['vacant_seats'];
                        
                        $flight_date = $row['flight_date'];
                        $departure_time = $row['departure_time'];
                        $arrival_time = $row['arrival_time'];
                        $route_id = $row['route_id'];
                        
                        $airfare = $row['airfare'];
                        $discount_id = $row['discount_id'];
                        $status = $row['status'];  
                            
                        echo "<tr>";
                            echo   "<td>{$flight_id}</td>";

                            $query1 = execute_query("SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id ='{$aeroplane_id}' ");
                            confirm($query1);
                            while($row1=fetch_array($query1))
                            {
                                $aeroplane_number = $row1['aeroplane_number'];
                                $aeroplane_brand = $row1['aeroplane_brand'];
                               
                            echo   "<td>{$aeroplane_number}</td>";
                            echo   "<td>{$aeroplane_brand}</td>";
                            
                              
                            }
                            echo   "<td>{$aeroplane_capacity}</td>";
                             echo   "<td>{$reserved_seats}</td>";
                            echo   "<td>{$vacant_seats}</td>";
                            echo "<td>{$flight_date}</td>";
                            
                             echo   "<td>{$departure_time}</td>";
                            echo   "<td>{$arrival_time}</td>";

                            $query2 = execute_query("SELECT * FROM airlines_reservation_system.routes WHERE route_id='{$route_id}' ");
                            confirm($query2);
                             while($row2=fetch_array($query2))
            {
                
                        $route_id = $row2['route_id'];
                        $route_starting_airport = $row2['starting_airport'];
                        $route_destination = $row2['destination'];
                            echo   "<td>{$route_starting_airport} <i class='fas fa-arrows-alt-h'></i> {$route_destination} ";
                        }

                                 echo "<td>&#8377; {$airfare}</td>";
                                

                                 $query4= execute_query("SELECT * FROM airlines_reservation_system.discounts WHERE discount_id='{$discount_id}' ");
                                confirm($query4);
                                while($row4=fetch_array($query4))
                                {
                                 $discount_title = $row4['discount_title'];
                                 $discount_amount = $row4['discount_amount'];
                                 echo "<td>{$discount_title}  &#8377;{$discount_amount}</td>";
                                }


                            
                            

                           
                           echo "<td>{$status}</td>";
                           echo "<td><a href='flights.php?change=$flight_id'>Change Status</a></td>";
                            echo "<td><a href='flights.php?source=edit_flights&edit_flight={$flight_id}'>Edit</a></td>";
                            echo "<td><a href='flights.php?delete=$flight_id'>Delete</a></td>";
                           
                            
                        echo "</tr>";  
               
                        }
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $flight_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.flights WHERE flight_id = {$flight_id} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: flights.php");

                      
                            }


                            if(isset($_GET['change']))
                            {
                                $flight_id_now= $_GET['change'];
                                
                        
                                if($status == 'pending') {
                                    $query ="UPDATE airlines_reservation_system.flights SET status= 'completed' WHERE flight_id = {$flight_id_now} ";
                                $query5 = mysqli_query($connection, $query);
                                confirm($query5);
                                } 
                                else if($status == 'completed') {
                                
                                      $query ="UPDATE airlines_reservation_system.flights SET status= 'pending' WHERE flight_id = {$flight_id_now} ";
                                $query6 = mysqli_query($connection, $query);
                                confirm($query6);
                                }
                              

                                
                                
                                
                                header("Location: flights.php");
                            }


                    


                         ?>
     