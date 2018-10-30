<?php
include('../database/db.php');

?>

<?php 
include('../functions.php');

 ?>

 <?php 
    if(isset($_GET['edit_route']))
    {
        $the_route_id = $_GET['edit_route'];
        $query1 = execute_query("SELECT * FROM airlines_reservation_system.routes WHERE route_id='{$the_route_id}' ");
        confirm($query1);
        while($row=fetch_array($query1))
        {
            $starting_airport = $row['starting_airport'];
            $destination =$row['destination'];
        }
    }

  ?>

 <?php
if(isset($_POST['edit_route']))
{

    $route_starting_airport=$_POST['route_starting_airport'];
    $route_destination=$_POST['route_destination'];
    
    
    
    
    
    $query = execute_query("UPDATE airlines_reservation_system.routes SET starting_airport='{$route_starting_airport}' , destination='{$route_destination}' WHERE route_id='{$the_route_id}' ");
    
    
    confirm($query);
    
 

header('Location:routes.php');
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    <div class="form-group">
        <label for="route_start">Route Starting Airport</label>
        <br>
        <select name="route_starting_airport">
            <?php 
                $query1=execute_query("SELECT * FROM airlines_reservation_system.airports");
                confirm($query1);
                while($row = fetch_array($query1))
                {
                    $airport_id = $row['airport_id'];
                    $airport_location = $row['airport_location'];

                    echo "<option value='{$airport_location}'>{$airport_location}</option>";
                }



             ?>
        </select>
       <!--  <input type="text" class="form-control" name="route_starting_airport" id="route_start"> -->
    </div>
    
   
    <div class="form-group">
        <label for="route_destination">Route Destination</label>
        <br>
        <select name="route_destination">
            <?php 
                $query1=execute_query("SELECT * FROM airlines_reservation_system.airports");
                confirm($query1);
                while($row = fetch_array($query1))
                {
                    $airport_id = $row['airport_id'];
                    $airport_location = $row['airport_location'];

                    echo "<option value='{$airport_location}'>{$airport_location}</option>";
                }



             ?>
        </select>
        <!-- <input type="text" class="form-control" name="route_destination" id="route_destination"> -->
    </div>


    

    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_route" value="Add route">
    </div>
    
</form>  