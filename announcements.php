<link rel="stylesheet" type="text/css" href="css/index-style.css">
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
     <div class="">
        
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
		 
		 <h3 id='announcement-title' class="text-center mb-3 mt-2" style="font-weight: 600;"><?php echo $announcement_title; ?></h3>
         <img src="images/announcements/<?php echo $announcement_image; ?>" alt="" class="col-lg-3 rounded mx-auto d-block text-center">
		 <article>
        <p style="font-size: 120%;" id='announcement-detail' class="mt-2"><?php echo $announcement_detail; ?>  </p>
    </article>

		 </div>


        <?php
	}
}

  ?>
  <div class="fixed-bottom">
<?php

include("includes/footer.php");


?>
</div>