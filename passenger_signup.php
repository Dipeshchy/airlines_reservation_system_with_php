<?php

include('link_container.php');
include('database/db.php');
include_once('functions.php');
?>

<?php
if(isset($_POST['back']))
{
    header('Location:index.php');
}


?>
<?php
passenger_signup();

?>


    <!-- Page Content -->
    <div id="user-signup" class="text-center">

      <header id='signup-header'>
            <h1><i class="fa fa-user-secret"> Passenger Signup</i></h1>
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
                <div class="form-group">
                  <input type="text" name="firstname" class="form-inline box" placeholder="First Name">
                </div>
                <div class="form-group">
                  <input type="text" name="lastname" class="form-inline box" placeholder="Last Name">
                </div>
                 <div  class="form-group text-left">
                  <label for="age">Age</label>
                  <select name='age'>
                    <?php 
                    for($i=1 ; $i<=120 ; $i++)
                    {
                    echo "<option value='{$i}'>{$i} </option>";
                     }
                     ?>
                  </select>
                </div>
                <!-- <div class="form-group">
                  <input type="text" name="username" class="form-inline box" placeholder="Username">
                </div> -->
                <div class="form-group">
                  <input type="email" name="email" class="form-inline box" placeholder="Email">
                </div>
                 <div class="form-group">
                  <input type="number" name="mobilenumber" class="form-inline box" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                  <input type="text" name="address" class="form-inline box" placeholder="Address">
                </div>
                <div class="form-group">
                  <input type="text" name="nationality" class="form-inline box" placeholder="Nationality">
                </div>
                <div class="form-group text-left">
                <label for="image">Passenger Image</label>

                <input type="file" name="image" id="image" class="form-inline box">
                </div>

                 <div class="form-group">
                    <input type="password" name="password" class="form-inline box" placeholder="Password">
                </div>
                 <div class="form-group">
                    <input type="password" name="confirmpassword" class="form-inline box" placeholder=" Re-enter Password">
                </div>


                <div class="form-group text-center" id="submit-back">
                  <input type="submit" name="signup" class="btn btn-primary" value="Sign Up">
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
    
