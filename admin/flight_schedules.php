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
                            case 'add_flight_schedules';
                                include "includes/add_flight_schedules.php";
                                break;
                                
                            case 'edit_flight_schedules';
                                include "includes/edit_flight_schedules.php";
                                break;
                                
                            default:
                                include "includes/view_all_flight_schedules.php";
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