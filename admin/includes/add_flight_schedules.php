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
    
    
    
    $query = "INSERT INTO airlines_reservation_system.flightschedules(flight_schedules_number, flight_schedules_brand, flight_schedules_capacity)";
    $query .= "VALUES('{$flight_schedules_number}' ,'{$flight_schedules_brand}' , '{$flight_schedules_capacity}') ";
    
    $add_flight_schedules_query = mysqli_query($connection , $query);
    
 

  echo "flight_schedules added"." "."<a href='flight_schedules.php'> View flight_schedules</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
   <!--  <div class="form-group">
        <select name="flight_schedules_role" id="">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="flight_schedules_number">flight_schedules Number</label>
        <input type="text" class="form-control" name="flight_schedules_number" id="flight_schedules_number">
    </div>
    
    
    
    
<div class="form-group">
        <label for="flight_schedules_brand">flight_schedules Brand</label>
        <input type="text" class="form-control" name="flight_schedules_brand" id="flight_schedules_brand">
    </div>

    
     <div class="form-group">
        <label for="flight_schedules_capacity">flight_schedules Capacity</label>
        <input type="text" class="form-control" name="flight_schedules_capacity" id="flight_schedules_capacity">
    </div>

   
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="add_flight_schedules" value="Add flight_schedules">
    </div>
    
</form> 