<?php
include('../database/db.php');

?>

<?php
if(isset($_POST['add_aeroplane']))
{

    $aeroplane_number=$_POST['aeroplane_number'];
    $aeroplane_brand=$_POST['aeroplane_brand'];
    

    
    
    // $post_comment_count = 4;
    
    
    
    $query = "INSERT INTO airlines_reservation_system.aeroplanes(aeroplane_number, aeroplane_brand)";
    $query .= "VALUES('{$aeroplane_number}' ,'{$aeroplane_brand}' ) ";
    
    $add_aeroplane_query = mysqli_query($connection , $query);
     if(!$add_aeroplane_query)
     {
        die("Error ".mysqli_error($connection));
     }
 

  echo "Aeroplane added"." "."<a href='aeroplanes.php'> View aeroplanes</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
   <!--  <div class="form-group">
        <select name="aeroplane_role" id="">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="aeroplane_number">Aeroplane Number</label>
        <input type="text" class="form-control" name="aeroplane_number" id="aeroplane_number">
    </div>
    
    
    
    
<div class="form-group">
        <label for="aeroplane_brand">Aeroplane Brand</label>
        <input type="text" class="form-control" name="aeroplane_brand" id="aeroplane_brand">
    </div>

    
    
   
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="add_aeroplane" value="Add aeroplane">
    </div>
    
</form> 