<?php

include('database/db.php');
?>
<?php
    include_once('link_container.php');
?>
 <body>
     <div class="container">
        <nav class="nav justify-content-end">
        <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-user"> Login </i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-user-plus"> Sign Up</i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_login.php"><i class="fa fa-user-secret"> Admin</i></a>
            </li>
        </nav>
        <nav class="nav navbar-expand-sm bg-light-blue navbar-light">
            <li class="nav-item">
                <a class="nav-link" href="#">fdf</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">fgdf</a>
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
<div class="fixed-bottom">
<?php

include("includes/footer.php");


?>
</div>