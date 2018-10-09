<?php
include('../database/db.php');

?>

<?php
if(isset($_POST['add_route']))
{

    $route_starting_airport=$_POST['route_starting_airport'];
    $route_destination=$_POST['route_destination'];
    
    
    
    
    
    $query = "INSERT INTO airlines_reservation_system.routes(starting_airport, destination)";
    $query .= "VALUES('{$route_starting_airport}' ,'{$route_destination}') ";
    
    $add_route_query = mysqli_query($connection , $query);
    
 

  echo "route added"." "."<a href='routes.php'> View routes</a>";
    
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
        <input type="text" class="form-control" name="route_starting_airport" id="route_start">
    </div>
    
    
    
    
<div class="form-group">
        <label for="route_destination">Route Destination</label>
        <input type="text" class="form-control" name="route_destination" id="route_destination">
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