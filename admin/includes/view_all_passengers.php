<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                   <th>Age</th>
                                    <th>Passenger Image</th>
                                    
                                    
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Mobile number</th>
                                    <th>Nationality</th>
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.passengers";
                $select_passengers=mysqli_query($connection, $query);
                if(!$select_passengers)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_passengers))
            {
                $passenger_id = $row['passenger_id'];
                $username = $row['username'];
                $passenger_password = $row['passenger_password'];
                 $passenger_firstname = $row['passenger_firstname'];
                $passenger_lastname = $row['passenger_lastname'];
                 $passenger_email = $row['passenger_email'];
                
                $passenger_image = $row['passenger_image'];
                $passenger_address = $row['passenger_address'];
                $passenger_mobno = $row['passenger_mobno'];
                $passenger_age = $row['passenger_age'];
                $passenger_nationality = $row['passenger_nationality'];
                            
                            
                        echo "<tr>";
                            echo   "<td>{$passenger_id}</td>";
                            echo   "<td>{$username}</td>";
                            echo   "<td>{$passenger_firstname}</td>";
                            echo   "<td>{$passenger_lastname}</td>";
                             echo   "<td>{$passenger_age}</td>";
                            echo   "<td><img class='img-responsive' src='../images/passengers/{$passenger_image}' height='60px' width='60px'></td>";
                            
                            
          
                            echo   "<td>{$passenger_email}</td>";
                            echo   "<td>{$passenger_address}</td>";
                            echo   "<td>{$passenger_mobno}</td>";
                            echo   "<td>{$passenger_nationality}</td>";
                            

                           
                           
                            echo "<td><a href='passengers.php?source=edit_passenger&edit_passenger={$passenger_id}'>Edit</a></td>";
                            echo "<td><a href='passengers.php?delete=$passenger_id'>Delete</a></td>";
                           
                            
                        echo "</tr>";  
               
                        }
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $user_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.passengers WHERE passenger_id = {$user_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: passengers.php");

                      
                            }

                         ?>
     