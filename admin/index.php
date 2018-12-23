 <?php 

 include("includes/header.php");
 if(empty($_SESSION['admin_username'])){
   header("Location: ../index.php");
 }
  ?>

    <div id="wrapper">
        
       

        <!-- Navigation -->
      <!--   <?php
        // include "includes/admin_navigation.php";
        ?>
 -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small> <?php echo $_SESSION['admin_username']; ?> </small>
                        </h1>
                  

             
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>