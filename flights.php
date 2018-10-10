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
 <div class="container">
<div class="row">
<div class="col-lg-8">
</div>

 <div class="col-lg-4">
 			<div class="well">
                    <h4 class='text-center'> Search Airlines</h4>
                    <div class="input-group">
                       
                       <form action="search.php" method="post">
                        <input type="text" class="form-control" name="search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name='submit'>
                                <span class="glyphicon glyphicon-search"> Search</span>
                        </button>
                        </span>
                        </form> <!-- search form ends -->
                    </div>
                    <!-- /.input-group -->
                </div>
            </div>
            </div>
            </div>