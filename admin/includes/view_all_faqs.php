<?php

include("../database/db.php");
?>

<table class="table table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>Faq Id</th>
                                    <th>Faq Question</th>
                                    <th>Faq Answer</th>
                                   
                                   
                                    
                                    
                                    
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
    <?php


                $query= "SELECT * FROM airlines_reservation_system.faqs";
                $select_faqs=mysqli_query($connection, $query);
                if(!$select_faqs)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_faqs))
            {
                
                        $faq_id = $row['faq_id'];
                        $faq_question = $row['faq_question'];
                        $faq_answer = $row['faq_answer'];
                           
                            
                        echo "<tr>";
                            echo   "<td>{$faq_id}</td>";
                            echo   "<td>{$faq_question}</td>";
                            echo   "<td>{$faq_answer}</td>";
                            
                             
                            

                           
                           
                            echo "<td><a href='faqs.php?source=edit_faqs&edit_faq={$faq_id}'>Edit</a></td>";
                            echo "<td><a href='faqs.php?delete=$faq_id'>Delete</a></td>";
                           
                            
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
     