<?php
include('../database/db.php');

?>
<?php 

include('../functions.php');
 ?>

 <?php 

 	if(isset($_GET['edit_airport']))
 	{
 		$the_airport_id = $_GET['edit_airport'];

 		$query1 = execute_query("SELECT * FROM airlines_reservation_system.airports WHERE airport_id = '{$the_airport_id}' ");
 		confirm($query1);
 		while($row = fetch_array($query1))
 		{
 			
 			$airport_location = $row['airport_location'];
 		}
 	}


  ?>

<?php
if(isset($_POST['edit_airport']))
{

    $airport_location=$_POST['airport_location'];
   
    
  
    
    

   
    

    
    
    $query = execute_query("UPDATE airlines_reservation_system.airports SET airport_location='{$airport_location}' WHERE airport_id = '{$the_airport_id}' ");
    confirm($query);
    
   

  header('Location:airports.php');
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="airport_location">Airport Location</label>
        <input type="text" class="form-control" name="airport_location" id="airport_location" value=" <?php echo $airport_location; ?>">
    </div>
    
 
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_airport" value="Edit Airport">
    </div>
    
</form> 