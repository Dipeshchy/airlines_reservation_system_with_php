<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Ticket Id</th>
                                    <th>Flight Details</th>
                                    <th>Passenger Detail</th>
                                    <th>Booked By</th>
                                   <th>Seat Numbers </th>
                                   <th>Status</th>
                                    </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.tickets";
                $select_tickets=mysqli_query($connection, $query);
                if(!$select_tickets)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_tickets))
            {
                
                        $ticket_id = $row['ticket_id'];
                        $flight_id = $row['flight_id'];
                        $passenger_id = $row['passenger_id'];
                        $seat_number = $row['seat_number'];
                        $status = $row['status'];
                        $passenger_name = $row['passenger_name'];
                        $passenger_age = $row['passenger_age'];
                           
                            
                        echo "<tr>";
                            echo   "<td>{$ticket_id}</td>";

                            $query1 = "SELECT * FROM airlines_reservation_system.flights WHERE flight_id = {$flight_id} ";
                            $execute_query1 = mysqli_query($connection,$query1);
                            if (!$execute_query1) {
                                die("Error ".mysqli_error($connection));
                            }
                            while ($row = mysqli_fetch_array($execute_query1)) {
                                $aeroplane_id = $row['aeroplane_id'];
                                $route_id = $row['route_id'];
                                $flight_date = $row['flight_date'];
                                $departure_time = $row['departure_time'];
                                $arrival_time = $row['arrival_time'];

                                 $query2 = "SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id = {$aeroplane_id} ";
                            $execute_query2 = mysqli_query($connection,$query2);
                            if (!$execute_query2) {
                                die("Error ".mysqli_error($connection));
                            }
                            while($row1 = mysqli_fetch_array($execute_query2))
                            {
                                $aeroplane_number = $row1['aeroplane_number'];
                                $aeroplane_brand = $row1['aeroplane_brand'];

                                $query3 = "SELECT * FROM airlines_reservation_system.routes WHERE route_id = {$route_id} ";
                            $execute_query3 = mysqli_query($connection,$query3);
                            if (!$execute_query3) {
                                die("Error ".mysqli_error($connection));
                            }
                            while($row2 = mysqli_fetch_array($execute_query3))
                            {
                                $starting_airport = $row2['starting_airport'];
                                $destination = $row2['destination'];
                                echo "<td>{$aeroplane_number} {$aeroplane_brand}<br> From: {$starting_airport} <br> To: {$destination} <br> {$flight_date} <br> {$departure_time} </td>";
                            }

                                
                            }

                            }


                           
                                echo "<td>Name : {$passenger_name} <br> Age : {$passenger_age}</td>";
                            

                            

                              $query4 = "SELECT * FROM airlines_reservation_system.passengers WHERE passenger_id = {$passenger_id} ";
                            $execute_query4 = mysqli_query($connection,$query4);
                            if (!$execute_query4) {
                                die("Error ".mysqli_error($connection));
                            }
                            while ($row4 = mysqli_fetch_array($execute_query4))
                            {
                                $username = $row4['username'];
                                $passenger_firstname = $row4['passenger_firstname'];
                                $passenger_lastname = $row4['passenger_lastname'];
                                echo   "<td>{$username} {$passenger_firstname} {$passenger_lastname}</td>";
                            }



                        
                            echo   "<td>{$seat_number}</td>";
                            
                             echo "<td>{$status}</td>";
                            

                           
                           
                            // echo "<td><a href='faqs.php?source=edit_faqs&edit_faq={$faq_id}'>Edit</a></td>";
                            // echo "<td><a href='faqs.php?delete=$faq_id'>Delete</a></td>";
                
                           
                            
                        echo "</tr>";  
               
                        }
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $faq_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.faqs WHERE faq_id = {$faq_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: faqs.php");

                      
                            }

                         ?>
     