<?php
include('../database/db.php');

?>

<?php
if(isset($_POST['add_flight_schedules']))
{

    $flight_date=$_POST['flight_date'];
    $flight_departure=$_POST['flight_departure'];
    
    $flight_arrival= $_POST['flight_arrival'];
    $aeroplane_id = $_POST['aeroplane_id'];

    
    
    // $post_comment_count = 4;
    
    
    
    $query = "INSERT INTO airlines_reservation_system.flightschedules(flight_date, departure, arrival , aeroplane_id)";
    $query .= "VALUES('{$flight_date}' ,'{$flight_departure}' , '{$flight_arrival}' , '{$aeroplane_id}') ";
    
    $add_flight_schedules_query = mysqli_query($connection , $query);
    
 

  echo "Flight Schedule added"." "."<a href='flight_schedules.php'> View Flight Schedules</a>";
    
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
        <input type="date" class="form-control" name="flight_date" id="flight_date">
    </div>
    
    
    
    
<div class="form-group">
        <label for="flight_departure">Flight Departure Time</label>
        <input type="time" class="form-control" name="flight_departure" id="flight_departure">
    </div>

    
     <div class="form-group">
        <label for="flight_arrival">Flight Arrival Time</label>
        <input type="time" class="form-control" name="flight_arrival" id="flight_arrival">
    </div>

   
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="add_flight_schedules" value="Add Flight Schedules">
    </div>
    
</form> 