<?php
include('../database/db.php');

?>
<?php 

include('../functions.php');
 ?>


<?php
if(isset($_POST['add_route']))
{

    $route_starting_airport=$_POST['route_starting_airport'];
    $route_destination=$_POST['route_destination'];
    
    
    
    
    
    $query = "INSERT INTO airlines_reservation_system.routes(starting_airport, destination)";
    $query .= "VALUES('{$route_starting_airport}' ,'{$route_destination}') ";
    
    $add_route_query = mysqli_query($connection , $query);
    
 

  echo "Route added"." "."<a href='routes.php'> View routes</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
   <!--  <div class="form-group">
        <select name="route_role" id="">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="route_start">Route Starting Airport</label>
        <br>
        <select name="route_starting_airport">
        <!--     <?php 
                // $query1=execute_query("SELECT * FROM airlines_reservation_system.airports");
                // confirm($query1);
                // while($row = fetch_array($query1))
                {
                    // $airport_id = $row['airport_id'];
                    // $airport_location = $row['airport_location'];

                    // echo "<option value='{$airport_location}'>{$airport_location}</option>";
                }



             ?> -->
                        <option value="Kathmandu">Kathmandu</option>
                        <option value="Biratnagar">Biratnagar</option>
                        <option value="Lukla">Lukla</option>
                        <option value="Bhadrapur">Bhadrapur</option>
                        <option value="Rajbiraj">Rajbiraj</option>
                        <option value="Janakpur">Janakpur</option>
                        <option value="Bharatpur">Bharatpur</option>
                        <option value="Pokhara">Pokhara</option>
                        <option value="Bhairahwa">Bhairahwa</option>
                        <option value="Nepalgunj">Nepalgunj</option>
                        <option value="Dhangadi">Dhangadi</option>
        </select>
       <!--  <input type="text" class="form-control" name="route_starting_airport" id="route_start"> -->
    </div>
    
    <br>
    
    
<div class="form-group">
        <label for="route_destination">Route Destination</label>
        <br>
        <select name="route_destination">
          <!--   <?php 
                // $query1=execute_query("SELECT * FROM airlines_reservation_system.airports");
                // confirm($query1);
                // while($row = fetch_array($query1))
                // {
                //     $airport_id = $row['airport_id'];
                //     $airport_location = $row['airport_location'];

                //     echo "<option value='{$airport_location}'>{$airport_location}</option>";
               // }



             ?> -->
                <option value="Kathmandu">Kathmandu</option>
                <option value="Biratnagar">Biratnagar</option>
                <option value="Lukla">Lukla</option>
                <option value="Bhadrapur">Bhadrapur</option>
                <option value="Rajbiraj">Rajbiraj</option>
                <option value="Janakpur">Janakpur</option>
                <option value="Bharatpur">Bharatpur</option>
                <option value="Pokhara">Pokhara</option>
                <option value="Bhairahwa">Bhairahwa</option>
                <option value="Nepalgunj">Nepalgunj</option>
                <option value="Dhangadi">Dhangadi</option>
        </select>
        <!-- <input type="text" class="form-control" name="route_destination" id="route_destination"> -->
    </div>

  
   
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="add_route" value="Add route">
    </div>
    
</form> 