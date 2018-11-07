<!DOCTYPE html>
<html>
<head>
    <title>FAQS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--  <script type="text/javascript">
           $(document).ready(function(){
        
                $(".question").click(function(){
                    $(this).closest(".answer").addClass("hello");
                    // alert("hello");
                });
            });
        
     </script> -->
</head>
<body>



<?php

include('database/db.php');
?>
<?php
    include_once('link_container.php');
    include_once('functions.php');
    session_start();
?>

<?php 
passenger_login();


 ?>

     <div class="container">
        <div id="header">
        <?php 

            include('includes/header.php');

         ?>
         <div class="card-header">
        
             <div class="display-4 text-center" id="faq-title" style="font-weight: 500;">Frequently Asked Questions</div>
             </div>
             <div class="card">
                 
                    <?php 
                        $query = execute_query("SELECT * FROM airlines_reservation_system.faqs");
                        confirm($query);
                        echo "<div id='accordion'>";
                        while($row= fetch_array($query))
                        {

                            $faq_question = $row['faq_question'];
                            $faq_answer = $row['faq_answer'];

                        
                        
                            
                                echo "<h5 class='question'><i class='fas fa-question-circle'>$faq_question</i></h5>";
                                echo "<div class='answer' style='display:none;'><i class='fas fa-arrow-circle-right'>$faq_answer</i>";
                                echo "</div>";
                            
                            
                            echo "<hr>";
                       
                            

                        }
                        echo "</div>";


                     ?>

                 
             </div>
         
           </div> 
     </div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".question").click(function(){
            // console.log("hello");
            $(this).next(".answer").toggle('slow');
            // $( this ).text( "htmlString" );
        })
    })
</script>


</body>
</html>





