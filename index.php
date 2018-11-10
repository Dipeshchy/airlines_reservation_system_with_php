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

 <body>
     <div class="container">
        <div id="header">
        <?php 

            include('includes/header.php');

         ?>
           </div> 
     </div>
 </body>
<?php

include("includes/ads.php");

?>

<div class="container">
    <div class="text-center">
        <header id="section-head">How it works</header>
        <span id="section-how">Surf - Search - Choose - Book - Confirm </span>
        <p>All you gotta do is follow the following instruction</p>
        
    </div>
    <div class="col-lg-4 how text-center" id="search">
        <span><i class="fa fa-search"></i><br>Surf and Search
    </div>
    <div class="col-lg-4 how text-center" id="check">
        <span><i class="fa fa-plane"></i><br>Check Availability
    </div>
    <div class="col-lg-4 how text-center">
        <span><i class="fa fa-check-double"></i><br>Book ticket
    </div>

</div>

<div class="container">
    <br>
   <?php 

    get_announcements();

    ?>



  <br style="clear: left;" />


  
</div>



<div id="contact" class="container card">
        <h3 class="text-center col-md-12 text-primary" style="float: left;">Contact Us</h3>
        
            <table class="col-md-12">
                <tr>
                    <td>
                        <section class="col-md-6">
            <h5 class="text-info">Contact Number</h5>
            <ul>
                <li><h6>Main Office :</h6>
                    <ul>
                        <li>Phone Number: 01-5432943</li>
                        <li>Mobile Number: 9842458893</li>
                        <li>Fax : 01 4434343</li>
                    </ul>
                </li>
               
            </ul>  
        </section>
        </td>

        <td>
        <section class="col-md-12">
            <h5 class="text-info">Address</h5>
            <ul>
                <li>hi</li>
                <li>Ktm</li>
                <li>New Baneswor</li>
            </ul>

        </section> 
        </td>
        </tr>  
        </table> 
          
    
</div>

<div class="fixed-bottom;">
<?php

include("includes/footer.php");


?>
</div>