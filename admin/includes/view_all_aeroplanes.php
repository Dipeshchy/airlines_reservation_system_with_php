<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Aeroplane Id</th>
                                    <th>Aeroplane Number</th>
                                    <th>Aeroplane Brand</th>
                                   
                                   
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.aeroplanes";
                $select_aeroplanes=mysqli_query($connection, $query);
                if(!$select_aeroplanes)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_aeroplanes))
            {
                
                        $aeroplane_id = $row['aeroplane_id'];
                        $aeroplane_number = $row['aeroplane_number'];
                        $aeroplane_brand = $row['aeroplane_brand'];
                           
                            
                        echo "<tr>";
                            echo   "<td>{$aeroplane_id}</td>";
                            echo   "<td>{$aeroplane_number}</td>";
                            echo   "<td>{$aeroplane_brand}</td>";
                            
                             
                            

                           
                           
                            echo "<td><a href='aeroplanes.php?source=edit_aeroplanes&edit_aeroplane={$aeroplane_id}'>Edit</a></td>";
                            echo "<td><a href='aeroplanes.php?delete=$aeroplane_id'>Delete</a></td>";
                           
                            
                        echo "</tr>";  
               
                        }
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $aeroplane_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id = {$aeroplane_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: aeroplanes.php");

                      
                            }

                         ?>
     