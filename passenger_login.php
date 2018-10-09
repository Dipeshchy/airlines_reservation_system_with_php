<?php

include('link_container.php');
include('database/db.php');
include_once('functions.php');

?>

<?php 

session_start();
 ?>

<?php
if(isset($_POST['back']))
{
    header('Location:index.php');
}


?>
<?php

passenger_login();


?>
   <!-- Page Content -->
    <div id="admin-login" class="text-center">

      <header id="admin-login-header">
            <h1><i class="fa fa-user-secret"> Passenger Login</i></h1>
            <h3 class="text-danger">
                <?php
                    display_message();
                ?>
            </h3>
            </header>
           
</h3>
        <div>         
            <form class="text-center justify-content-center" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" name="username" class="form-inline box" placeholder="Username">
                </div>
                 <div class="form-group"><input type="password" name="password" class="form-inline box" placeholder="Password">
                </div>

                <div class="form-group text-center" id="submit-back">
                  <input type="submit" name="submit" class="btn btn-primary">
                  <input type="submit" name="back" class="btn btn-danger" value="Back">
                  
                   
                </div>
                
            </form>            
        </div>  
        </div>

 
    <!-- /.container -->

        <!-- Footer -->
        
    <?php 

    include("includes/footer.php");

     ?>

    
    <!-- /.container -->

    <!-- jQuery -->
    
