<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Discount Id</th>
                                    <th>Discount Title</th>
                                    <th>Discount Amount</th>
                                    <th>Discount Description</th>
                                   
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.discounts";
                $select_discount=mysqli_query($connection, $query);
                if(!$select_discount)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_discount))
            {
                
                        $discount_title = $row['discount_title'];
                        $discount_amount = $row['discount_amount'];
                        $discount_id = $row['discount_id'];
                        $discount_description = $row['discount_description'];    
                            
                        echo "<tr>";
                            echo   "<td>{$discount_id}</td>";
                            echo   "<td>{$discount_title}</td>";
                            echo   "<td>{$discount_amount}</td>";
                            echo   "<td>{$discount_description}</td>";
                             
                            

                           
                           
                            echo "<td><a href='discounts.php?source=edit_discount&edit_discount={$discount_id}'>Edit</a></td>";
                            echo "<td><a href='discounts.php?delete=$discount_id'>Delete</a></td>";
                           
                            
                        echo "</tr>";  
               
                        }
                                
                               
                 
                      ?>          
                            </tbody>
                        </table>
                        <?php 

                            if(isset($_GET['delete']))
                            {
                                $discount_id_delete= $_GET['delete'];
                                
                                $query ="DELETE FROM airlines_reservation_system.discounts WHERE discount_id = {$discount_id_delete} ";
                                $delete_query = mysqli_query($connection, $query);
                                if(!$delete_query)
                                {
                                    die('Error'.mysqli_error($connection));
                                }
                                // confirmQuery($delete_query);
                                header("Location: discounts.php");

                      
                            }

                         ?>
     