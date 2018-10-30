<?php
include('../database/db.php');

?>

<?php
if(isset($_POST['add_airport']))
{

  
    $airport_location=$_POST['airport_location'];
    
  
    
    

    
    
    
    $query = "INSERT INTO airlines_reservation_system.airports(airport_location)";
    $query .= "VALUES('{$airport_location}') ";
    
    $add_airport_query = mysqli_query($connection , $query);
    if(!$add_airport_query)
    {
        die('failed'.mysqli_error($connection));
    }
 

  echo "Airport added"." "."<a href='airports.php'> View airports</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
 

    <div class="form-group">
        <label for="airport_location">Airport Location</label>
        <input type="text" class="form-control" name="airport_location" id="airport_location">
    </div>
    
    
    
 
   
   
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="add_airport" value="Add airport">
    </div>
    
</form> 