<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Admin name</th>
                                    <th>Admin Firstname</th>
                                    <th>Admin lastname</th>
                                   
                                    <th>Admin Image</th>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.admin";
                $select_admin=mysqli_query($connection, $query);
                if(!$select_admin)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_admin))
            {
                $admin_id = $row['admin_id'];
                $admin_username = $row['admin_username'];
               
                 $admin_firstname = $row['admin_firstname'];
                $admin_lastname = $row['admin_lastname'];
                
                
                $admin_image = $row['admin_image'];
            
                            
                        echo "<tr>";
                            echo   "<td>{$admin_id}</td>";
                            echo   "<td>{$admin_username}</td>";
                            echo   "<td>{$admin_firstname}</td>";
                            echo   "<td>{$admin_lastname}</td>";
                            echo   "<td><img class='img-responsive' src='../images/admin/{$admin_image}' height='60px' width='60px'></td>";
                            
                            
          
                           

                           
                           
                            echo "<td><a href='admin.php?source=edit_admin&edit_admin={$admin_id}'>Edit</a></td>";

                            echo "<td><a href='admin.php?delete=$admin_id'>Delete</a></td>";
                           
                            
                        echo "</tr>";  
               
                        }
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $admin_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.admin WHERE admin_id = {$admin_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: admin.php");

                      
                            }

                         ?>
     