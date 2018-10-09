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
            if(isset($_SESSION['username']))
            {
               $passenger_username = $_SESSION['username'];

             ?>
                  <nav class="nav justify-content-end">
                        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                      <?php 
                        show_user_image_in_home();
                       ?>
                        <!-- <i class="fa fa-user"></i> -->
                        <?php echo $_SESSION['username']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="admin/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li> 
                </nav>

           <?php     
            }

             else
             {

            ?>
            <nav class="nav justify-content-end">
                <li class="nav-item">
                <a class="nav-link" href="passenger_login.php"><i class="fa fa-user"> Login </i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="passenger_signup.php"><i class="fa fa-user-plus"> Sign Up</i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_login.php"><i class="fa fa-user-secret"> Admin</i></a>
            </li>
            </nav>

    <?php

    }
         ?>
        <nav class="nav navbar-expand-sm bg-light-blue navbar-light">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Flights</a>
            </li>
             <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Supoort</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">FAQS</a>
            <a class="dropdown-item" href="#">Contact number</a>
            <a class="dropdown-item" href="#">Address</a>
            </div>
            </li>
             <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
            </div>
            </li>
        </nav>
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
        
    <div class="col-lg-4" id="everest-experience" style="float: left;">
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
    </div>
     <div class="col-lg-4">
        <img src="images/destination.jpg" alt="" class="col-lg-12">
        <h3 style="text-align: center; color: white; background-color: blue; ">Flight destination we provide</h3>
        <p style="background-color: white; color: black; overflow: hidden;">Kathmandu,Bhadrapur,Biratnagar,Lukla,Janakpur,
        Bharatpur,Dhangadi and many more..</p>
    </div>
   
</div>

<div class="container" id='contact'>
    <h3>Contact us</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
</div>

<div class="">
<?php

include("includes/footer.php");


?>
</div>