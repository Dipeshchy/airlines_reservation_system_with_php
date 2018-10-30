<?php
include "includes/header.php";


?>

    <div id="wrapper">
        
       

        <!-- Navigation -->
        <!-- <?php
        include "includes/admin_navigation.php";
        ?> -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small><?php echo $_SESSION['admin_username']; ?></small>
                        </h1>
                        
                        <?php
                        if(isset($_GET['source']))
                        {
                            $source=$_GET['source'];
                        }
                        else
                        {
                            $source='';
                        }
                        switch ($source)
                        {
                            case 'add_airports';
                                include "includes/add_airports.php";
                                break;
                                
                            case 'edit_airports';
                                include "includes/edit_airports.php";
                                break;
                                
                            default:
                                include "includes/view_all_airports.php";
                                break;
                                
                        }
                        
                        ?>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 <!--    <?php
        // include "includes/admin_footer.php";
        
        
        
        ?>
 -->