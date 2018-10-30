<?php
include('../database/db.php');

?>

<?php 

include('../functions.php');
 ?>
<?php 

if(isset($_GET['edit_aeroplane']))
{
    $the_edit_aeroplane_id = $_GET['edit_aeroplane'];

    $query1= "SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id = '{$the_edit_aeroplane_id}' ";
    $execute_query1= mysqli_query($connection , $query1);
    if(!$execute_query1)
    {
        die('Error'.mysqli_error($connection));
    }

    while($row=mysqli_fetch_array($execute_query1))
    {
    $aeroplane_number = $row['aeroplane_number'];
    $aeroplane_brand = $row['aeroplane_brand'];
}
}


 ?>

<?php
if(isset($_POST['edit_aeroplane']))
{

    $aeroplane_number = $_POST['aeroplane_number'];
    $aeroplane_brand = $_POST['aeroplane_brand'];
    
    
    
    $query = "UPDATE airlines_reservation_system.aeroplanes SET aeroplane_number='{$aeroplane_number}' ,aeroplane_brand='{$aeroplane_brand}' WHERE aeroplane_id = '{$the_edit_aeroplane_id}' ";
   
    
    $edit_aeroplane_query = mysqli_query($connection , $query);
    if(!$edit_aeroplane_query)
    {
        die('Error '.mysqli_error($connection));
    }
    
  
header('Location:aeroplanes.php');
    
}


?>
  
   <form action="" method="post" enctype="multipart/form-data">
 
    <div class="form-group">
        <label for="aeroplane_number">Aeroplane Number</label>
        <input type="text" class="form-control" name="aeroplane_number" id="aeroplane_number" value="<?php echo $aeroplane_number; ?>">
    </div>
    
    
    
    
<div class="form-group">
        <label for="aeroplane_brand">Aeroplane Brand</label>
        <input type="text" class="form-control" name="aeroplane_brand" id="aeroplane_brand" value="<?php echo $aeroplane_brand; ?>">
    </div>


    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_aeroplane" value="Edit Aeroplane">
    </div>
    
</form> 