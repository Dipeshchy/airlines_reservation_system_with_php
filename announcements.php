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

if(isset($_GET['announcement_id']))
{
	$announcement_id = $_GET['announcement_id'];

	$query = "SELECT * FROM airlines_reservation_system.announcements WHERE announcements_id = '{$announcement_id}' ";
	$execute_query = mysqli_query($connection , $query);

	if(!$execute_query)
	{
		die('Error '.mysqli_error($connection));
	}
	while($row= mysqli_fetch_array($execute_query))
	{
		$announcement_title = $row['announcements_title'];
        $announcement_id = $row['announcements_id'];
        $announcement_image = $row['announcements_image'];
        $announcement_detail = $row['announcements_detail']; 

        ?>
   			
        	 <div class="container">
		 <img style="float: left;" src="images/announcements/<?php echo $announcement_image; ?>" alt="" class="col-lg-3 justify-content-center">
		 <h3 style="text-align: center; color: white; background-color: rgb(168, 144, 50); font-weight: 700;" class="text-center"><?php echo $announcement_title; ?></h3>
		 <article  style="background-color: white; color: black;">
        <p style="background-color: white; color: black;"><?php echo $announcement_detail; ?>  </p>
    </article>

		 </div>


        <?php
	}
}

  ?>
  <div class="">
<?php

include("includes/footer.php");


?>
</div>