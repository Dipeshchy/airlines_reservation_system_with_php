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
        
        <?php 

            include('includes/header.php');

         ?>
            
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
   <!--  <div class="col-lg-4" id="everest-experience" style="float: left;">
        <img src="images/everest.jpg" alt="" class="col-lg-12">
        <h3 style="text-align: center; color: white; background-color: rgb(168, 144, 50);">Everest Experience</h3>
        <article  style="background-color: white; color: black;">
        <p style="background-color: white; color: black;">Everest Experience is a close-encounter mountain flight-seeing tour.  Indulge in the panorama and maybe, just maybe, you might realize what you have been missing, or find what you have been looking for, all this while.After all a trip to Nepal would be incomplete without truly understanding what really makes it beautiful.</p>
        <p>Nothing compares to the sheer beauty or awe, the Himalayas has to offer.  Take the mother of all mountain flights, the Everest Experience where we put you, one on one with Mt. Everest, so close that you can almost touch it.</p>
    </article>
        </div>
    
     <div class="col-lg-4">
        <img src="images/destination.jpg" alt="" class="col-lg-12">
        <h3 style="text-align: center; color: white; background-color: blue; ">Flight destination we provide</h3>
        <p style="background-color: white; color: black; overflow: hidden;">Kathmandu,Bhadrapur,Biratnagar,Lukla,Janakpur,
        Bharatpur,Dhangadi and many more..</p>
    </div>  -->


 <!-- <div class="col-lg-4" style="float: left;  border:2px solid red;">Left Stuff</div>
 <div class="col-lg-4" style="float: left;  border:2px solid red;">Middle Stuff</div>
 <div class="col-lg-4" style="float: left;  border:2px solid red;">Right Stuff</div>
 <div class="col-lg-4" style="float: left;  border:2px solid red;">Right Stuff</div>
 <br style="clear: left;" /> -->
  <br style="clear: left;" />


   <!--   <div class="col-lg-4" style="float: none;">
        <img src="images/destination.jpg" alt="" class="col-lg-12">
        <h3 style="text-align: center; color: white; background-color: blue; ">Flight destination we provide</h3>
        <p style="background-color: white; color: black; overflow: hidden;">Kathmandu,Bhadrapur,Biratnagar,Lukla,Janakpur,
        Bharatpur,Dhangadi and many more..</p>
    </div>
 -->
</div>

<!-- <div class="container" id='contact'>
    <h3>Contact us</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div> -->

<div class="fixed-bottom;">
<?php

include("includes/footer.php");


?>
</div>