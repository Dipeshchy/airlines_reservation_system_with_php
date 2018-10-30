<!-- font awesome cdn -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<?php
include('../database/db.php');

?>

<?php
if(isset($_POST['add_airfare']))
{

    $aeroplane_id=$_POST['aeroplane_id'];
    $route_id=$_POST['route_id'];
    
    $airfare= $_POST['airfare'];
    
    
    // $post_comment_count = 4;
    
    
    
    $query = "INSERT INTO airlines_reservation_system.airfare(aeroplane_id, route_id, fare)";
    $query .= "VALUES('{$aeroplane_id}' ,'{$route_id}' , '{$airfare}') ";
    
    $add_airfare_query = mysqli_query($connection , $query);
    if(!$add_airfare_query)
    {
    	die('Failed '.mysqli_error($connection));
    }
 

  echo "Airfare added "." "."<a href='airfares.php'> View airfares</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
   <!--  <div class="form-group">
        <select name="airfare_role" id="">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="airfare_number">Aeroplane Detail</label>
        <br>
        <select name='aeroplane_id'>
        	<?php
        	 $query1= "SELECT * FROM airlines_reservation_system.aeroplanes";
                $select_aeroplanes=mysqli_query($connection, $query1);
                if(!$select_aeroplanes)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_aeroplanes))
            {
                
                        $aeroplane_id = $row['aeroplane_id'];
                        $aeroplane_number = $row['aeroplane_number'];
                        $aeroplane_brand = $row['aeroplane_brand'];
        	
        	echo "<option value='{$aeroplane_id}'>{$aeroplane_number} {$aeroplane_brand} </option>";

}
?>
        </select>


    </div>
    
    
    <br>

    
<div class="form-group">
        <label for="airfare_brand">Route</label>
        <br>
        <select name="route_id">

<?php 

	$query2 = "SELECT * FROM airlines_reservation_system.routes";
                $select_routes=mysqli_query($connection, $query2);
                if(!$select_routes)
                {
                    die('Error'.mysqli_error($connection));
                }

                while($row=mysqli_fetch_array($select_routes))
            {
                
                        $route_id = $row['route_id'];
                        $route_starting_airport = $row['starting_airport'];
                        $route_destination = $row['destination'];
echo "<option value='{$route_id}'>{$route_starting_airport} To {$route_destination} </option>";
                        


                    }

 ?>
</select>
    </div>

    <br>
     <div class="form-group">
        <label for="airfare_capacity">Airfare</label>
        <input type="number" class="form-control" name="airfare" id="airfare">
    </div>

    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="add_airfare" value="Add airfare">
    </div>
    
</form> 