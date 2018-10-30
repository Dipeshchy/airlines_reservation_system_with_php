 <?php
include('../database/db.php');

?>

<?php 
    include('../functions.php');

 ?>

 <?php 
 	if(isset($_GET['edit_flight_schedule']))
 	{
 		$the_flight_schedule_id = $_GET['edit_flight_schedule'];

 		$query1 = execute_query("SELECT * FROM airlines_reservation_system.flightschedules WHERE flight_schedule_id='{$the_flight_schedule_id}' ");
 		confirm($query1);
 		while($row=fetch_array($query1))
 		{
 			$flight_date = $row['flight_date'];
 			$departure_time = $row['departure'];
 			$arrival_time = $row['arrival'];
 			$aeroplane_id = $row['aeroplane_id'];
 		}
 	}

  ?>

 <?php
if(isset($_POST['edit_flight_schedules']))
{

    $flight_date=$_POST['flight_date'];
    $flight_departure=$_POST['flight_departure'];
    
    $flight_arrival= $_POST['flight_arrival'];
    $aeroplane_id = $_POST['aeroplane_id'];

    
    
    // $post_comment_count = 4;
    
    
    
    $query = execute_query("UPDATE airlines_reservation_system.flightschedules SET flight_date='{$flight_date}' , departure='{$flight_departure}' , arrival='{$flight_arrival}' , aeroplane_id='{$aeroplane_id}' WHERE flight_schedule_id='{$the_flight_schedule_id}' ");
    confirm($query);
    
 

  header('Location:flight_schedules.php');
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
     <div class="form-group">
        <label>Aeroplane Number and Number</label>
        <br>
        <select name="aeroplane_id" id="">
            <?php 
                $query1 = "SELECT * FROM airlines_reservation_system.aeroplanes";
                $execute_query = mysqli_query($connection,$query1);
                if(!$execute_query)
                {
                    die('failed'.mysqli_error($connection));
                }

                while($row = mysqli_fetch_array($execute_query))
                {
                    $aeroplane_id_number = $row['aeroplane_id'];
                    $aeroplane_number = $row['aeroplane_number'];
                    $aeroplane_brand = $row['aeroplane_brand'];
                    echo "<option value='{$aeroplane_id_number}'>{$aeroplane_number} {$aeroplane_brand}</option>";
                }

             ?>
        </select>
    </div> 

    <div class="form-group">
        <label for="flight_date">Flight Date</label>
        <input type="date" class="form-control" name="flight_date" id="flight_date" value="<?php echo $flight_date; ?>">
    </div>
    
    
    
    
<div class="form-group">
        <label for="flight_departure">Flight Departure Time</label>
        <input type="time" class="form-control" name="flight_departure" id="flight_departure" value="<?php echo $flight_departure; ?>">
    </div>

    
     <div class="form-group">
        <label for="flight_arrival">Flight Arrival Time</label>
        <input type="time" class="form-control" name="flight_arrival" id="flight_arrival" value="<?php echo $flight_arrival; ?>">
    </div>

   
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_flight_schedules" value="Edit Flight Schedules">
    </div>
    
</form> 