<?php

include('link_container.php');
include('database/db.php');
include_once('functions.php');
session_start();
?>

<?php


?>
<?php
if(isset($_POST['back']))
{
    header('Location:index.php');
}


?>
<?php

admin_login();

?>


    <!-- Page Content -->
    <div id="admin-login" class="text-center" style="margin-top: 10%;">

      <header id="admin-login-header">
            <h1 class="text-danger"><i class="fa fa-user-secret"> Admin Login</i></h1>
            <h3 class="text-danger">
                <?php
                    display_message();
                ?>
            </h3>
            </header>
           
</h3>
        <div style="display: block;
    text-align: center;">         
            <form class="text-center justify-content-center" action="" method="post" enctype="multipart/form-data" style="display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;">
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
        
  
    
    <!-- /.container -->

    <!-- jQuery -->
    
