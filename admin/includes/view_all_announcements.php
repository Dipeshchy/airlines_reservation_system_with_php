<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Announcement Id</th>
                                    <th>Announcement Title</th>
                                    <th>Announcement Image</th>
                                    <th>Announcement Detail</th>
                                   
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.announcements";
                $select_announcements=mysqli_query($connection, $query);
                if(!$select_announcements)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_announcements))
            {
                
                        $announcement_title = $row['announcements_title'];
                        $announcement_id = $row['announcements_id'];
                        $announcement_image = $row['announcements_image'];
                        $announcement_detail = $row['announcements_detail'];    
                            
                        echo "<tr>";
                            echo   "<td>{$announcement_id}</td>";
                            echo   "<td>{$announcement_title}</td>";
                            echo   "<td><img src='../images/announcements/{$announcement_image}' height='60px' width='60px' alt=''> </td>";
                            echo   "<td>{$announcement_detail}</td>";
                             
                            

                           
                           
                            echo "<td><a href='announcements.php?source=edit_announcements&edit_announcement={$announcement_id}'>Edit</a></td>";
                            echo "<td><a href='announcements.php?delete=$announcement_id'>Delete</a></td>";
                           
                            
                        echo "</tr>";  
               
                        }
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $announcement_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.announcements WHERE announcements_id = {$announcement_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: announcements.php");

                      
                            }

                         ?>
     