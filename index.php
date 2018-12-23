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
     <div class="">
        <div id="header">
        <?php 

            include('includes/header.php');

         ?>
           </div> 
     </div>
 </body>
 <div class="mt-5">
<?php

include("includes/ads.php");

?>
</div>
<div class="container">
    <div class="text-center">
        <header id="section-head" style="font-weight: 600;">How it works</header>
        <span id="section-how" style="font-weight: 500;">Surf - Search - Choose - Book - Confirm </span>
        <p style="font-weight: 500;">All you gotta do is follow the following instruction</p>
        
    </div>
    <div class="col-lg-4 how text-center" id="search" style="font-weight: 500;">
        <span><i class="fa fa-search"></i><br>Surf and Search
    </div>
    <div class="col-lg-4 how text-center" id="check" style="font-weight: 500;">
        <span><i class="fa fa-plane"></i><br>Check Availability
    </div>
    <div class="col-lg-4 how text-center" style="font-weight: 500;">
        <span><i class="fa fa-check-double"></i><br>Book ticket
    </div>

</div>

<br>
<br>
<hr>


<div class="container">
    <br>
    <div >
   <?php 

    get_announcements();

    ?>
</div>


  <br style="clear: left;" />


  
</div>



<div id="contact" class="card mt-5" style="background-color: blue;">
        <h3 class="text-center col-md-12" style="float: left;color: white;">Contact Us</h3>
        
            <table class="col-md-12" style="color: white;margin-left: 100px;">
                <tr>
                    <td>
                        <section class="col-md-6">
            <h5>Contact Number</h5>
            <ul style="color: white;">
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
            <h5>Address</h5>
            <ul style="color: white;">
                <li>New Baneswor</li>
                <li>Beside KFC</li>
                <li>Kathmandu</li>
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